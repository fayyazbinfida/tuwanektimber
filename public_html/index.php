<?php include('header.php'); ?>
<style>.image-container {
  position: relative;
  display: inline-block;
}


.banner_title {
  position: absolute;
  top: 41%;
  left: 50%;
  transform: translate(-50%, -50%);

  color: #fff;
  padding: 10px 20px;
}

.banner_email {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 15px;
  color: #fff;
  background-color: rgba(0, 0, 0, 0.7);
  padding: 10px 20px;
}

.list-item-spacing {
  margin-bottom: 30px !important; /* Add desired spacing between list items */
}
.my-banner{
        padding: 50px 0 !important;
}

@media only screen and (max-width: 1024px) {
.banner_email{
top: 60%;    
}
    
}
@media only screen and (max-width: 768px){
.banner_email {
    top: 65%;
}
}
@media only screen and (max-width: 768px){
.banner_email {
    top: 75%;
}
}



</style>
 <section class="banner my-banner position-relative overflow-hidden">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-12">
        <div class="ps-lg-5 text-center">
          <div class="image-container">
            <img loading="lazy" decoding="async" src="images/banner/Welcome-scaled.jpg" alt="banner image" class="w-100">
            <!-- Add the title element here -->
            <h1 class="banner_title">Tuwanek Timbers</h1>
           <a class="banner_email" href="mailto:tuwanektimbers@gmail.com">tuwanektimbers@gmail.com</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <section>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>WELCOME</h2>
      </div>
      <div class="col-lg-10 my-2 mx-auto">
        <div class="content my-3 text-data-home">
          <ul class="list-unstyled">
            <li class="list-item-spacing">
              Relax and enjoy the tall trees, comfortable cabin and quiet beauty of our Sunshine Coast Getaway.
            </li>
            <li class="list-item-spacing">
              Tuwanek is a small oceanfront community tucked away at the end of Sechelt Inlet Road. Approximately 4 km past Porpoise Bay Provincial Park.
            </li>
            <li class="list-item-spacing">
              Pull into the driveway and find a bright yard, flowering bushes, tall trees, and a welcoming cabin.
            </li>
            <li class="list-item-spacing">
              The cabin has two floors, big front deck with propane BBQ, as well as a back yard patio which has a 6-person hot tub and fire pit.
            </li>
            <li class="list-item-spacing">
              Enjoy the hot tub nestled in the tall trees in the back yard, or sit with friends, while preparing your dinner.
            </li>
            <li class="list-item-spacing">
              It’s a great cabin, sitting on 1/3 of an acre with a pretty front yard that has cherry trees, cedar, dogwood and lots of birds. Peek-a-boo view of Sechelt Inlet from the front deck.
            </li>
            <li class="list-item-spacing">
              There are two beaches within walking distance to choose from. Lamb’s Brook is a 5-minute walk from the cabin and a perfect place to launch a kayak or canoe. Tuwanek Beach is a 10-minute walk from our cabin and is a well-known scuba diving location.
            </li>
          </ul>

          <div class="text-center">
            <a href="https://www.google.com/search?q=tuwanektimbers&amp;rlz=1C1CHBD_enPK906PK906&amp;oq=tuwanektimbers&amp;aqs=chrome..69i57j69i60l5.2049j0j1&amp;sourceid=chrome&amp;ie=UTF-8#lrd=0x548636e8272c5207:0xdd631fcb2efb811b,1,,," target="_blank" class="btn btn-primary">
              <i class="fa fa-google"></i> Google Reviews Tuwanek Timbers
            </a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>

    <?php include('footer.php');?>