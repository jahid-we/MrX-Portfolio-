<header class="py-5">
    <!-- Main header container with padding -->
    <div class="container px-5 pb-5">
        <!-- Row for the header content -->
        <div class="row gx-5 align-items-center">
            <!-- Column for the left content (Text section) -->
            <div class="col-xxl-5">
                <div class="text-center text-xxl-start">
                    <!-- Badge for key line (Design, Development, Marketing) -->
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                        <div class="text-uppercase" id="keyLine">Design &middot; Development &middot; Marketing</div>
                    </div>
                    <!-- Short introductory text under the badge -->
                    <div class="fs-3 fw-light text-muted" id="short_title">I can help your business to</div>
                    <!-- Main heading text for the hero section -->
                    <h1 class="display-3 fw-bolder mb-5">
                        <span class="text-gradient d-inline" id="title">Get online and grow fast</span>
                    </h1>
                    <!-- Button grid with two buttons for Resume and Projects -->
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{ url('/resume') }}">Resume</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ url('/projects') }}">Projects</a>
                    </div>
                </div>
            </div>
            <!-- Column for the right content (Image section) -->
            <div class="col-xxl-7">
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <!-- Profile image container -->
                    <div class="profile">
                        <img class="profile-img" id="profileImg" src="assets/profile.png" alt="Profile Image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    // Function to fetch hero data from the server
    getHero();

    async function getHero() {
        let URL = 'api/heroData'; // API endpoint to fetch hero data
        try {
            showLoader(); // Show loader while fetching data
            const res = await axios.get(URL); // Make a GET request to the server
            // Update the DOM with the fetched data
            document.getElementById('keyLine').innerHTML = res.data.data[0].keyLine;
            document.getElementById('short_title').innerHTML = res.data.data[0].short_title;
            document.getElementById('title').innerHTML = res.data.data[0].title;
            // Uncomment the line below to dynamically load the profile image
            // document.getElementById('profileImg').setAttribute('src', res.data.data[0].profileImg);
        } catch (error) {
            errorToast('Something went wrong, please try again later'); // Show error message if API request fails
        }
    }
</script>
