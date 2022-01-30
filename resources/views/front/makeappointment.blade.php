
 <!-- Contact section start here -->
 <section class="contact-section style-1 padding-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="section-header text-lg-left">
                    <h2><span class="d-block">Have A Questions?</span> Chat With <span class="theme-color">Professional Doctor</span></h2>
                </div>
                <div class="section-wrapper">
                    <form action="{{url('appointment')}}" method="POST">
                        <input type="text" name="name" placeholder="Your Name">
                        <input type="text" name="phone" placeholder="Your Phone">
                        <input type="text" name="type_of_service" placeholder="Type of Service">
                        <input type="text" name="date" placeholder="dd/mm/yyyy">
                        <input type="text" name="from" placeholder="From">
                        <input type="text" name="to" placeholder="To">
                        <input type="text" staff="staff" placeholder="Staff">
                        <button type="submit" class="lab-btn"><span>Check Availability <i class="icofont-rounded-double-right"></i></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact section ending here -->

