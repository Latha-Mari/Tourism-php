// JavaScript for the slider functionality

let nextBtn = document.querySelector('.next')
let prevBtn = document.querySelector('.prev')

let slider = document.querySelector('.slider')
let sliderList = slider.querySelector('.slider .list')
let thumbnail = document.querySelector('.slider .thumbnail')
let thumbnailItems = thumbnail.querySelectorAll('.item')

thumbnail.appendChild(thumbnailItems[0])

// Function for next button 
nextBtn.onclick = function() {
    moveSlider('next')
}


// Function for prev button 
prevBtn.onclick = function() {
    moveSlider('prev')
}


function moveSlider(direction) {
    let sliderItems = sliderList.querySelectorAll('.item')
    let thumbnailItems = document.querySelectorAll('.thumbnail .item')
    
    if(direction === 'next'){
        sliderList.appendChild(sliderItems[0])
        thumbnail.appendChild(thumbnailItems[0])
        slider.classList.add('next')
    } else {
        sliderList.prepend(sliderItems[sliderItems.length - 1])
        thumbnail.prepend(thumbnailItems[thumbnailItems.length - 1])
        slider.classList.add('prev')
    }


    slider.addEventListener('animationend', function() {
        if(direction === 'next'){
            slider.classList.remove('next')
        } else {
            slider.classList.remove('prev')
        }
    }, {once: true}) // Remove the event listener after it's triggered once
}



// JavaScript for the filter functionality
    document.addEventListener('DOMContentLoaded', function() {
		const filterButtons = document.querySelectorAll('.filter-btn');
		const projectItems = document.querySelectorAll('.project-item');

		filterButtons.forEach(button => {
			button.addEventListener('click', function() {
				// Set active class on button
				filterButtons.forEach(btn => btn.classList.remove('active'));
				this.classList.add('active');

				const filterValue = this.getAttribute('data-filter');

				projectItems.forEach(item => {
					const itemCategories = item.getAttribute('data-category'); // "web design"

					// Hide by default, then show if it matches
					item.classList.add('hide');

					if (filterValue === 'all') {
						item.classList.remove('hide');
					} else if (itemCategories && itemCategories.split(' ').includes(filterValue)) {
						// Check if any of the item's categories match the filter
						item.classList.remove('hide');
					}
				});
			});
		});

		});





	