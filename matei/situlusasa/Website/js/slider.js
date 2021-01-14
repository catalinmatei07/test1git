let populate = ''
links = ['', 'leonardo.html', '#', '#']
paths = ['', 'photo/leonardo da vinci.jpg', 'photo/zvezdnaya_noci.jpg', 'photo/Rembrandt_Christ_in_the_Storm_on_the_Lake_of_Galilee.jpg', 'photo/American Gothic.jpg']
nume = ['', 'Leonardo da Vinci', 'Vincent Van Gog', 'Rembrandt', 'Pablo Picasso']
for (let i = 1; i <= 4; i++) {
    populate +=
        `<a href="${links[i]}" target="_blank">
        <div class="first_picture">
            <img src="${paths[i]}" alt="">
            <p style="color:white">${nume[i]}</p>
        </div>
    </a><span style="display: none"></span>`
}

document.getElementById('grid-slider').innerHTML = populate
let k = 0
elementeSlider = document.getElementById('grid-slider').innerHTML
elementeSlider = elementeSlider.split('<span style="display: none"></span>')
elementeSlider = elementeSlider.filter(item => item != '')

let animate = () => {
    (k === 0) ? (elementeSlider.push(...elementeSlider), elementeSlider.push(...elementeSlider)) : ('')
    if (k % 4 == 0 && k != 0) {
        elementeSlider.push(...elementeSlider)
    }
    k++;
    final = ''
    elementeSlider.forEach(element => {
        final += element
    });
    document.getElementById('grid-slider').style.transform = 'translate(-' + (k) * 430 + 'px)'
    document.getElementById('grid-slider').style.transition = '2s'
    document.getElementById('grid-slider').innerHTML = final
}

setInterval(()=>{focus = document.hasFocus();console.log(focus);focus == true ? animate() : ''}, 3000)