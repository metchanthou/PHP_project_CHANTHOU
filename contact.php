<div class="card bg-dark text-white">
    <img class="card-img" src="otherFile/pictures/e1.png"  height= "500px">
    <div class="card-img-overlay text-uppercase">
        <h5 class="text-white  display-3 font-weight-bold mr-3">Register Your</h5>
        <h5 class= "text-white display-3 font-weight-bold">User Account</h5>
    </div>

    <div class="container">
        <div class="row p-2 mt-3">
            <div class=" col-sm-6 ">
                <h1>Regester Your Name</h1>
                <form action="contact_action.php" enctype= "multipart/form-data" method="post">
                    <div class="form-group">
                        <label for="uname" class= "text-info">First Name*</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter first name" name="f_name" required>
                        <div class="valid-feedback">Valid.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname" class= "text-info">Last Name*</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter last name" name="l_name" required>
                        <div class="valid-feedback">Valid.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname" class= "text-info">Age*</label>
                        <input type="number" class="form-control" placeholder="Enter your age" name="age" required>
                    </div>     
                    <div class="form-group">
                        <label for="email" class= "text-info">Email*</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                        <div class="valid-feedback">Valid.</div>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name= "image" id="inputGroupFile04">
                        <label class="custom-file-label" for="inputGroupFile04">Choose profile</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" name= "comment" placeholder="Why you want join with me...." id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2 " class= "text-info">Comments</label>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
                        </label>
                    </div>
                    <button type="submit" name= "send" class="btn btn-primary">SEND</button>
                </form>
            </div>

            <div class="mapouter col-sm-6 ">
                <div class="gmap_canvas">
                    <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <a href="https://www.fnfgo.com/">FNF Go</a>
                </div>
                <style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style>
            </div>
    </div>
</div>