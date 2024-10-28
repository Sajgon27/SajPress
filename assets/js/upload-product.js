function checkboxes_after_ajax() {
const dropdownWrappers = document.querySelectorAll('.dropdown-checkbox-wrapper');

dropdownWrappers.forEach(function(wrapper) {
    const dropdown = wrapper.querySelector('.dropdown-checkbox');
    const dropdownToggle = wrapper.querySelector('.dropdown-checkbox-toggle');
    const dropdownMenu = wrapper.querySelector('.dropdown-checkbox-menu');
    const selectedOptionsContainer = wrapper.querySelector('.selected-options-checkbox');
    const checkboxes = wrapper.querySelectorAll('.dropdown-checkbox-menu input[type="checkbox"]');

    // Toggle the dropdown when the button is clicked
    dropdownToggle.addEventListener('click', function() {
        console.log('fsd');
        dropdown.classList.toggle('active');
    });

    // Close the dropdown if clicked outside
    window.addEventListener('click', function(event) {
        if (!dropdown.contains(event.target)) {
            dropdown.classList.remove('active');
        }
    });

    // Handle checkbox change and display selected options
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            updateSelectedOptions();
        });
    });

    function updateSelectedOptions() {
        // Clear the current selected options display
        selectedOptionsContainer.innerHTML = '';

        // Create array to store selected options
        let selectedOptions = [];

        // Iterate over each checkbox and add selected options to the array
        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                selectedOptions.push(checkbox.value);

                // Create a div for each selected option
                const optionDiv = document.createElement('div');
                optionDiv.classList.add('selected-option');
                optionDiv.textContent = checkbox.value;

                // Add click event to uncheck checkbox when selected option is clicked
                optionDiv.addEventListener('click', function() {
                    checkbox.checked = false;
                    updateSelectedOptions();
                });

                selectedOptionsContainer.appendChild(optionDiv);
            }
        });
       // dropdownToggle.textContent = selectedOptions.length ? selectedOptions.join(', ') : 'Select Options';
    }
});


}
checkboxes_after_ajax();





document.addEventListener('DOMContentLoaded', function() {
    // Toggle dropdown visibility
    document.querySelector('.dropdown-button-category').addEventListener('click', function() {
        const container = this.parentElement;
        container.classList.toggle('active');
    });

    // Toggle sub-options visibility
    document.querySelectorAll('.parent-option').forEach(function(parent) {
        parent.addEventListener('click', function() {
            const subOptions = this.nextElementSibling;
            if (subOptions && subOptions.classList.contains('sub-options')) {
                subOptions.style.display = subOptions.style.display === 'block' ? 'none' : 'block';
            }
        });
    });

    const dropdownContainer = document.querySelector('.dropdown-checkbox-container');
    document.addEventListener('click', function(event) {
        if (!dropdownContainer.contains(event.target)) {
            dropdownContainer.classList.remove('active');
        }
    });


    document.querySelectorAll('.parent-checkbox, .child-checkbox').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            const container = this.closest('.dropdown-checkbox-container');
            const selectedOptionsContainer = container.querySelector('.selected-options');
            const value = this.value;
            const checkbox_element = this;
            if (this.checked) {
             
                if (this.classList.contains('child-checkbox')) {
                    const parentCheckbox = this.closest('.sub-options').previousElementSibling.querySelector('.parent-checkbox');
                   // parentCheckbox.checked = true;
                    //addSelectedOption(parentCheckbox.value, selectedOptionsContainer, this);
                }
                addSelectedOption(value, selectedOptionsContainer, this);
            } else {
         
                if (this.classList.contains('parent-checkbox')) {
                    const subOptions = this.closest('.parent-option').nextElementSibling;
                    if (subOptions && subOptions.classList.contains('sub-options')) {
                        subOptions.querySelectorAll('.child-checkbox').forEach(function(childCheckbox) {
                            childCheckbox.checked = false;
                           
                            removeSelectedOption(childCheckbox.value, selectedOptionsContainer, checkbox_element);
                        });
                    }
                }
                removeSelectedOption(value, selectedOptionsContainer, checkbox_element);
            }
        });
    });

    
    function addSelectedOption(value, container, text) {
        if (!Array.from(container.children).some(option => option.textContent === text.getAttribute('data-title'))) {
            const selectedOption = document.createElement('span');
            selectedOption.className = 'selected-option';
            selectedOption.textContent = text.getAttribute('data-title');
            
            container.appendChild(selectedOption);

 
            selectedOption.addEventListener('click', function() {
                const checkbox = document.querySelector(`input[data-title="${text.getAttribute('data-title')}"]`);
                console.log(checkbox);
                checkbox.checked = false;
                removeSelectedOption(value, container, text);
            });
        }
    }

    function removeSelectedOption(value, container, text) {
        
        const selectedOption = Array.from(container.children).find(option => option.textContent === text.getAttribute('data-title'));
        if (selectedOption) {
            
            container.removeChild(selectedOption);
        }
    }
});



function handleImages(imageInputId, imagePreviewContainerId) {
    document.addEventListener('DOMContentLoaded', function() {
        const imageInput = document.getElementById(imageInputId);
        const imagePreviewContainer = document.getElementById(imagePreviewContainerId);
        let imageFiles = []; 
    
        imageInput.addEventListener('change', function(event) {
            const files = event.target.files;
    
           
            if(imageInputId == 'product_gallery_upload_main') {
                imagePreviewContainer.innerHTML = '';
            }
    
           
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
    
               
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const imgPreviewDiv = document.createElement('div');
                        imgPreviewDiv.classList.add('image-preview');
    
                
    
                        const removeButton = document.createElement('button');
                        removeButton.textContent = 'x';
                        removeButton.classList.add('remove-image');

                        const img = document.createElement('img');
                        img.src = e.target.result;

       
                        removeButton.addEventListener('click', function() {
                            imagePreviewContainer.removeChild(imgPreviewDiv);
                            imageFiles = imageFiles.filter((_, index) => index !== i); 
                        });
    
                        imgPreviewDiv.appendChild(img);
                        imgPreviewDiv.appendChild(removeButton);
                        imagePreviewContainer.appendChild(imgPreviewDiv);
    
                       
                        imageFiles.push(file);
                    };
    
                    reader.readAsDataURL(file); 
                }
            }
        });
    
        
    });

}

handleImages('product_gallery_upload_main', 'image-preview-container-main');
handleImages('product_gallery_upload_slides', 'image-preview-container-slides');


// SLIDE IMAGES HANDLER
const handleChange = () => {
    const fileUploader = document.querySelector('#input-file');
        const getFile = fileUploader.files
        if (getFile.length !== 0) {
            const uploadedFile = getFile[0];
            readFile(uploadedFile);
        }
    }

    const readFile = (uploadedFile) => {
        if (uploadedFile) {
            const reader = new FileReader();
            reader.onload = () => {
            const parent = document.querySelector('.preview-box-file');
            parent.innerHTML = `<spanclass="preview-content">${uploadedFile.name} </span>`;
            };
            
            reader.readAsDataURL(uploadedFile);
        }
    };




// PRODUCT ATTRIBUTES BASED ON A SELECTED CATEGORY
//////////////////////////////////////////////////
//////////////////////////////////////////////////

 jQuery(document).ready(function($) {
    const loader = document.getElementById('loader');
    const content = document.getElementById('product-attributes');
    $('.product-category label').click(function() {
        loader.style.display = 'block';
        content.style.display = 'none';
        var category = $(this).data('category'); 


        $.ajax({
            url: ajax_object.ajax_url, 
            type: 'POST',
            data: {
                action: 'load_upload_category', 
                category: category 
            },
            success: function(response) {

                console.log('ajax loaded');
                content.style.display = 'flex';
                loader.style.display = 'none';
                $('#product-attributes').html(response);
                checkboxes_after_ajax();
                
            },
            error: function() {
                content.style.display = 'flex';
                loader.style.display = 'none';
                $('#product-attributes').html('<p>An error occurred while loading the section.</p>');
            }
        });
    });
});   