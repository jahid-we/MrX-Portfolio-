<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <p id="about-title" class="lead fw-light mb-4"></p>
                    <p id="about-des" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a target="_blank" id="twitter" class="text-gradient" href=""><i class="bi bi-twitter"></i></a>
                        <a target="_blank" id="linkedin" class="text-gradient" href=""><i class="bi bi-linkedin"></i></a>
                        <a target="_blank" id="github" class="text-gradient" href=""><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    getAbout();

    async function getAbout() {
        let URL = 'api/aboutData';
        try{
            const res = await axios.get(URL);
            document.getElementById('about-title').innerHTML = res.data.data[0].title;
            document.getElementById('about-des').innerHTML = res.data.data[0].details;
        }catch(error){
            errorToast('Something went wrong, please try again later');
        }
    }

    getSocialLinks();

    async function getSocialLinks() {
        let URL = 'api/socialData';
        try{
            const res = await axios.get(URL);
            hideLoader();
            document.getElementById('twitter').setAttribute('href', res.data.data[0].twitterLink);
            document.getElementById('linkedin').setAttribute('href', res.data.data[0].linkedinLink);
            document.getElementById('github').setAttribute('href', res.data.data[0].githubLink);
        }catch(error){
            errorToast('Something went wrong, please try again later');
        }
    }
</script>

