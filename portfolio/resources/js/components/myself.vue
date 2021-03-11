<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="">
                    <div class="card-body">
                        <!-- <img
                            class="img_profil"
                            src="{{asset('images/dev.png')}}"
                            alt="Papa laity Ndiaye Profil photo"
                        /> -->
                        <br />
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div class="">
                    <div class="card-body">
                        <h3>Papa Laity NDIAYE</h3>
                        <p>Téléphone: +221774919731 / +2213913601</p>
                        <p>Mail: pappalaity@gmail.com</p>

                        <!-- <a href="https://github.com/PappaLaity"><img class="resume_filiale_ref" src="{{asset('images/icon_link/github.png')}}" alt="Papa Laity Ndiaye Github"></a>
                         <a href="https://twitter.com/pappalaity"><img class="resume_filiale_ref" src="{{asset('images/icon_link/twitterl.png')}}" alt="Papa Laity Ndiaye Twitter"></a>
                        <a href="https://web.facebook.com/laisco1/"> <img class="resume_filiale_ref" src="{{asset('images/icon_link/fb.png')}}" alt="Papa Laity Ndiaye Facebook"></a>
                        <a href="https://www.linkedin.com/in/pappalaity/"><img class="resume_filiale_ref" src="{{asset('images/icon_link/linkedIn.png')}}" alt="Papa Laity Ndiaye LinkedIn"></a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
    data() {
        return {
            fullname: "Papa laity NDIAYE"
        };
    }
};
</script>
