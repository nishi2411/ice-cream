<?php
    include("topper.php");
    include("head.php");
    include("nav.php");
?>

 <!-- Carousel Start -->
 <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Traditional & Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4">Traditional Ice Cream Since 1950</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Traditional & Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4">Made From Our Own Organic Milk</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Traditional & Delicious Ice Cream Since 1950</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">About Us</h4>
                    <h5 class="text-muted mb-3">Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero dolor sea</h5>
                    <p>Takimata sed vero vero no sit sed, justo clita duo no duo amet et, nonumy kasd sed dolor eos diam lorem eirmod. Amet sit amet amet no. Est nonumy sed labore eirmod sit magna. Erat at est justo sit ut. Labor diam sed ipsum et eirmod</p>
                    <a href="" class="btn btn-secondary mt-2">Learn More</a>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Our Features</h4>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                    <a href="" class="btn btn-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>


    <Center> 
                        <!-- <h2>Registration</h2> -->
                    <form>
                        <fieldset>
                            <legend><center><u><h3> Registration</h3></u> </center></legend>
                    <table> 
                        <tr>     
                        <td>
                            First Name: 
                        </td>
                        <td><input type="text" name="fname"/></td>
                        </tr>
                    
                        <tr>     
                            <td>
                                Middle Name: 
                            </td>
                            <td><input type="text" name="mname"/></td>  
                        </tr>
                    
                        <tr>     
                            <td>
                                Last Name: 
                            </td>
                            <td><input type="text" name="lname"/></td>  
                        </tr>
                    
                        <tr>     
                            <td>
                                Gender: 
                            </td>
                            <td><input type="radio" name="male" value="Male"/> 
                                <label>Male</label> 
                            <input type="radio" name="female" value="Female"/>
                                <label>Female</label>
                            </td>  
                    
                        </tr>
                    
                        <tr>     
                            <td>
                               City:
                            </td>
                            <td>
                                <select>
                                    <option>Surat</option>
                                    <option>Bardoli</option>
                                    <option>Valsad</option>
                                    <option>Navsari</option>
                                </select>
                            </td>  
                        </tr>
                        <tr>     
                            <td>
                                Hobbies: 
                            </td>
                            <td><input type="checkbox" name="read" value="read"/> 
                                <label>Reading</label> 
                            <input type="checkbox" name="write" value="write"/>
                                <label>Writing</label>
                            </td>
                            <tr>
                                <td>
                                </td>
                                <td>
                            <input type="checkbox" name="play" value="play"/>
                                <label>Playing</label>
                            <input type="checkbox" name="dance" value="dance"/>
                                <label>Dancing</label>
                                </td>
                            </tr>  
                    
                        </tr>
                      
                        <tr>     
                            <td>
                                DOB: 
                            </td>
                            <td><input type="date" name="date"/></td>  
                        </tr>
                    
                        <tr>     
                            <td>
                                Time: 
                            </td>
                            <td><input type="time" name="time"/></td>  
                        </tr>
                    
                        <tr>     
                            <td>
                                Email id: 
                            </td>
                            <td><input type="email" name="email"/></td>  
                        </tr>
                    
                        <tr>     
                            <td>
                                Password: 
                            </td>
                            <td><input type="password" name="pwd"/></td>  
                        </tr>
                    
                        <tr>     
                            <td>
                                Color: 
                            </td>
                            <td><input type="color" name="clr"/></td>  
                        </tr>
                    
                        <tr>     
                            <td>
                                Image: 
                            </td>
                            <td><input type="file" name="img"/></td>  
                        </tr>
                     </table>
                     <br>
                     <input type="submit" name="submit"/>
                     <br>
                     <br>
                     <a href="login.php"> Login</a>
                     </fieldset>
                    </form>
                    
                    </Center>

    <?php
    include("footer.php");
    ?>