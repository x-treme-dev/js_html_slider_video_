<html>
<head>
<style>
 
 ul.cards, p{
    margin:0;
    padding:0;
}

body{
    background-color:  #aed6f1;
}

.container{
    display:flex;
    justify-content: center;
}

.scroll-container{
    width: 600px;
    height: 305px;
    display: flex;
    overflow-y: scroll;
    overflow-x: hidden;  
    scrollbar-width: none;  
}
.cards__item {
    display: flex;
    justify-content: start;
    font-size: 1.15em;
    border: 1px solid #ccc;
    padding: 5px;
    margin: 7px;
    height: 100px;
    width: 560px;
    background-color: #fbfcfc;
}

.cards__image img {
    max-width: 200px;
    max-height: 100px;
    margin-right: 10px;
}

.cards__image img:hover{
    border: 1px solid #ccc;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    cursor: pointer;
}

.cards_desc {
    color: #333;
}

.iframe{
    border: 1px solid #ccc;
    width: 540px;
    height:305px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
}
 
</style>
</head>
<body>
   <div class="container">
   <iframe id="iframe" class="iframe" src="https://rutube.ru/play/embed/9d06ff793bac52445b3e070dff69b755/" frameborder="0" allowfullscreen></iframe>
    <div class="scroll-container">
            <ul class="cards" id="cards">
                <li class="cards__item">
                    <a target="_blank" href="https://rutube.ru/video/9d06ff793bac52445b3e070dff69b755/" class="cards__image">
                        <img src="assets/1.png" alt="Пример картинки">
                    </a>
                    <p class="cards__desc">Строительство водоочестного комплекса</p>
                </li>
                <li class="cards__item">
                    <a target="_blank" href="https://rutube.ru/video/85f1458ad6deec4710f25ba223aa6b60/" class="cards__image">
                        <img src="assets/2.png" alt="Пример картинки">
                    </a>
                    <p class="cards__desc">Новый водовод в с.Черноземное</p>
                </li>
                <li class="cards__item">
                    <a target="_blank" href="https://rutube.ru/video/6c6cb339e0015d4effa38f7cbca28787/" class="cards__image">
                        <img src="assets/3.png" alt="Пример картинки">
                    </a>
                    <p class="cards__desc">Капитальный ремонт водовода в Евпатории</p>
                </li>
                <li class="cards__item">
                    <a target="_blank" href="https://rutube.ru/video/688587a73126a7f7aef6d29403d27911/" class="cards__image">
                        <img src="assets/4.png" alt="Пример картинки">
                    </a>
                    <p class="cards__desc">Замена магистральных водоводов в Керчи</p>
                </li>
                <li class="cards__item">
                    <a target="_blank" href="https://rutube.ru/video/9d06ff793bac52445b3e070dff69b755/" class="cards__image">
                        <img src="assets/1.png" alt="Пример картинки">
                    </a>
                    <p class="cards__desc">Строительство водоочестного комплекса</p>
                </li>
                <li class="cards__item">
                    <a target="_blank" href="https://rutube.ru/video/85f1458ad6deec4710f25ba223aa6b60/" class="cards__image">
                        <img src="assets/2.png" alt="Пример картинки">
                    </a>
                    <p class="cards__desc">Новый водовод в с.Черноземное</p>
                </li>
                <li class="cards__item">
                    <a target="_blank" href="https://rutube.ru/video/6c6cb339e0015d4effa38f7cbca28787/" class="cards__image">
                        <img src="assets/3.png" alt="Пример картинки">
                    </a>
                    <p class="cards__desc">Капитальный ремонт водовода в Евпатории</p>
                </li>
                <li class="cards__item">
                    <a target="_blank" href="https://rutube.ru/video/688587a73126a7f7aef6d29403d27911/" class="cards__image">
                        <img src="assets/4.png" alt="Пример картинки">
                    </a>
                    <p class="cards__desc">Замена магистральных водоводов в Керчи</p>
                </li>
            </ul>
        </div> 
   </div>
   <script>

    document.querySelectorAll('.cards__image').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();  
            const hrefValue = this.getAttribute('href');  
            const videoId = getId(hrefValue);  
            const newSrc = 'https://rutube.ru/play/embed/' + videoId + '/';  
            document.getElementById('iframe').setAttribute('src', newSrc);  
        });
        function getId(url){
          let regex = '/video\/([a-zA-Z0-9]+)/';
          let id = url.match(regex);
          return id[1];
        }
    });
</script>
</body>
</html>





 
