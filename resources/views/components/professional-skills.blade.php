<div class="container px-5 my-5">
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <section>
                <!-- Section Heading for Professional Skills -->
                <h2 class="text-secondary fw-bolder mb-4">Professional Skills</h2>
                <!-- Card to display skills -->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <!-- Container for the skill list -->
                        <div id="skills-list" class="row row-cols-1 row-cols-md-3 mb-4">
                            <!-- Skills will be injected here dynamically -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script>
    // Function to fetch and display skills
    getSkills();

    // Function to fetch skill data from the API
    async function getSkills() {
        let URL = 'api/skillsData';  // URL of the API that returns skill data
        try {
            // Fetching the data from the API
            const res = await axios.get(URL);

            // Iterating over the response data and dynamically inserting it into the DOM
            res.data.data.forEach((item) => {
                let skillList = document.getElementById('skills-list');
                skillList.innerHTML += (`
                    <div class="col p-2 mb-4 mb-md-0">
                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                            ${item['name']}  <!-- Skill name inserted here -->
                        </div>
                    </div>
                `);
            });
        } catch (error) {
            // Handling errors if the API call fails
            errorToast('Something went wrong, please try again later');
        }
    }
</script>
