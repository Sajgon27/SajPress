let page = 1; // Initialize page variable

console.log('g');

// Function to fetch photos
function fetchPhotos() {
    const url = `/wp-json/custom/v1/pexels-photos?page=${page}`; // Fetch from custom endpoint
    fetch(url)
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        if (data.photos && data.photos.length) {
            displayPhotos(data.photos);
            page++; // Increment the page number
            document.getElementById('load-more').style.display = 'block';
        } else {
            document.getElementById('load-more').style.display = 'none';
        }
    })
    .catch(error => console.error('Error fetching photos:', error));
}

// Function to display photos in the gallery
function displayPhotos(photos) {
    const containers = [
        document.getElementById('containerA'),
        document.getElementById('containerB'),
        document.getElementById('containerC')
    ];
    
    let counter = 0; // To keep track of the current container
    
    photos.forEach(photo => {
        const imageUrl = photo.src.medium; // Use medium size image
        const photographer = photo.photographer; // Photographer name
        const photoPage = photo.url; // Link to the photo page
    
        // Create a new anchor element
        const a = document.createElement('a');
        a.href = photoPage;
        a.className = 'pexels-photo';
        a.target = '_blank'; // Open in new tab
    
        // Create a new img element
        const img = document.createElement('img');
        img.src = imageUrl;
        img.alt = `Photo by ${photographer}`;
    
        // Append img to a, then a to the current container
        a.appendChild(img);
        containers[counter].appendChild(a);
    
        // Cycle through the containers using the modulus operator
        counter = (counter + 1) % containers.length;
    });
}

// Infinite scrolling
window.addEventListener('scroll', () => {
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 100) {
        document.getElementById('load-more').style.display = 'none';
        document.getElementById('loading').style.display = 'block';
        fetchPhotos();
    }
});

// Initial load
fetchPhotos();