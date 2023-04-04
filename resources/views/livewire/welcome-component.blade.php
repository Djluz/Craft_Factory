<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Welcome
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="cointainer pb-100 pt-100">
                    <div class="pop-up">
                        @auth
                        <div class="confirmed-message">
                            <img src="{{asset('assets/imgs/check.png')}}" alt="check-img">
                            <h2>Welcome <span class="red">{{ Auth::user()->name }}</span>!</h2><br>
                            <p>You have successfully logged in.</p>
                            <button type="submit"><a href="/" class="white">Continue</a></button>

                        </div>
                        @endauth

                    </div>
                </div>
            </div>
        </section>
   </main>
</div>
