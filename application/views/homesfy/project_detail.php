<div class="content-wrapper main-wrap">
    <?php 

        if (!empty($detail)) {

            $arrIcon = ["intercom facility"=>"fa-Tty", "lift(s)"=>"fa-Building", "internet"=>"fa-Wifi" , "business center"=>"fa-Building", "lift"=>"fa-Building", "power backup"=>"fa-Battery-Quarter", "feng shui / vaastu compliant"=>"fa-Gopuram", "security / fire alarm"=>"fa-shield-alt", "centrally air conditioned"=>"fa-Fan", "private garden / terrace"=>"fa-Tree", "park"=>"fa-Tree", "swimming pool"=>"fa-Swimmer", "maintenance staff"=>"fa-Tools", "visitor parking"=>"fa-Parking", "internet/wi-fi connectivity"=>"fa-Wifi", "security personnel"=>"fa-shield-alt", "club house / community center"=>"fa-Home", "fitness centre / gym"=>"fa-Dumbbell", "water softening plant"=>"fa-Tree", "water storage"=>"fa-Water", "piped-gas"=>"fa-Burn", "restaurant"=>" fa-Utensils", "badminton court"=>"fa-table-tennis", "cricket pitch"=>"fa-Football-Ball", "basketball court"=>"fa-Football-Ball", "squash court"=>"fa-Football-Ball", "atm"=>"fa-HandHoldingUsd", "indoor game room"=>"fa-table-tennis", "rainwater harvesting"=>"fa-Water", "landscaped garden"=>"fa-Tree", "cycling & jogging track"=>"fa-Biking", "children play area"=>"fa-table-tennis", "gym"=>"fa-Dumbbell", "library"=>"fa-Book-Reader", "spa"=>"fa-Spa", "tennis court"=>"fa-table-tennis", "amphitheatre"=>"fa-Theater-Masks", "rain water harvesting" =>"fa-Water", "sports area"=>"fa-table-tennis", "24x7 security"=>"fa-shield-alt", "service/goods lift"=>"fa-Building", "sewage treatment plant"=>"fa-Wrench", "internal roads"=>"fa-Road", "community hall"=>"fa-Building", "aerobics room"=>" fa-Dumbbell", "high-tech alarm system"=>"fa-shield-alt", "fire fighting systems"=>"fa-Fire-Extinguisher", "utility shops"=>"fa-Store", "security"=>"fa-shield-alt", "skating rink"=>"fa-Skating", "golf course"=>"fa-Golf-Ball"];

            echo '<section class="pt-4 bg-white">
                    <div class="container">
                        <div class="row mb-4">
                            <div class="col-md-5">
                                <div class="property_img">
                                    <img src='.$detail['images']['main'].' alt="kalpataru paramount a"/>
                                    </div>
                            </div>
                            <div class="col-md-7">
                                <div class="productTitle mb-2">
                                    <h4 class="t-capital">'.$detail['title'].'</h4>
                                    <small class="t-capital">'.$detail['display_location'].'</small>
                                </div>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    ';
                                    $counter =0;
                                    foreach ($detail['config'] as $con) {
                                        $counter ++;
                                        $class_name = ($counter == 1) ? 'active' : '';
                                        echo '
                                                <li class="nav-item">
                                                    <a class="nav-link '.$class_name.'" id="home-tab" data-toggle="tab" href='.'#'.$con['bed_config'].'bhk'.' role="tab" aria-controls="home" aria-selected="true">'.$con['bed_config'].'BHK'.'</a>
                                                </li>
                                    ';
                                    }
                                    echo '    
                                </ul>
                                    <div class="tab-content" id="myTabContent">
                                    ';
                                    $test ='';
                                    $counter =0;
                                    foreach ($detail['config'] as $con) {
                                        $counter ++;
                                        $class_name = ($counter == 1) ? 'show active' : '';
                                        $test .= '    
                                        <div class="tab-pane fade '.$class_name.'" id="'.$con['bed_config'].'bhk'.'" role="tabpanel" aria-labelledby="home-tab">
                                            <ul class="list-unstyled prop_align mt-2">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-sm-4 col-4">
                                                            <div class="p_title">Bedrooms</div>';
                                                            
                                                            if(!empty($con['bed_config'])){
                                                              $test .= '<div class="p_value">'.(string)$con['bed_config'].'</div>';  
                                                            }else{
                                                              $test .= '<div class="p_value">-</div>';  
                                                            }

                                                        $test .= '
                                                        </div>
                                                        <div class="col-sm-4 col-4">
                                                            <div class="p_title">Bathrooms</div>';
                                                            
                                                            if(!empty($con['bath_no'])){
                                                              $test .= '<div class="p_value">'.(string)$con['bath_no'].'</div>';  
                                                            }else{
                                                              $test .= '<div class="p_value">-</div>';  
                                                            }

                                                        $test .= '
                                                        </div>
                                                        <div class="col-sm-4 col-4">
                                                            <div class="p_title">Balcony</div>';
                                                            
                                                            if(!empty($con['balcony'])){
                                                              $test .= '<div class="p_value">'.(string)$con['balcony'].'</div>';  
                                                            }else{
                                                              $test .= '<div class="p_value">-</div>';  
                                                            }

                                                        $test .= '
                                                        </div>
                                                    </div>
                                                </li>
                                                <hr/>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-sm-4 col-4">
                                                            <div class="p_title">Rate per Sq.ft</div>';
                                                            
                                                            if(!empty($con['rateperfeet'])){
                                                              $test .= '<div class="p_value">'.(string)$con['rateperfeet'].'</div>';  
                                                            }else{
                                                              $test .= '<div class="p_value">-</div>';  
                                                            }

                                                        $test .= '
                                                        </div>
                                                        <div class="col-sm-4 col-4">
                                                            <div class="p_title">Carpet area</div>';
                                                            
                                                            if(!empty($con['property_area'])){
                                                              $test .= '<div class="p_value">'.(string)$con['property_area'].'</div>';  
                                                            }else{
                                                              $test .= '<div class="p_value">-</div>';  
                                                            }

                                                        $test .= '
                                                        </div>
                                                        <div class="col-sm-4 col-4">
                                                            <div class="p_title">Price</div>';
                                                            
                                                            if(!empty($con['price'])){
                                                              $test .= '<div class="p_value">'.(string)$con['price'].'</div>';  
                                                            }else{
                                                              $test .= '<div class="p_value">-</div>';  
                                                            }

                                                        $test .= '
                                                        </div>
                                                    </div>
                                                </li>
                                                <hr/>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-sm-4 col-4">
                                                            <div class="p_title">Status</div>';
                                                            
                                                            if(!empty($con['sale_type'])){
                                                              $test .= '<div class="p_value">'.(string)$con['sale_type'].'</div>';  
                                                            }else{
                                                              $test .= '<div class="p_value">-</div>';  
                                                            }

                                                        $test .= '
                                                        </div>
                                                        <div class="col-sm-4 col-4">
                                                            <div class="p_title">Car parking</div>';
                                                            
                                                            if(!empty($con['parking'])){
                                                              $test .= '<div class="p_value">'.(string)$con['parking'].'</div>';  
                                                            }else{
                                                              $test .= '<div class="p_value">-</div>';  
                                                            }

                                                        $test .= '
                                                        </div>
                                                        <div class="col-sm-4 col-4">
                                                            <div class="p_title">Floor</div>';
                                                            
                                                            if(!empty($con['floors'])){
                                                              $test .= '<div class="p_value">'.(string)$con['floors'].'</div>';  
                                                            }else{
                                                              $test .= '<div class="p_value">-</div>';  
                                                            }

                                                        $test .= '
                                                        </div>
                                                    </div>
                                                </li>
                                                <hr/>
                                            </ul>
                                        </div>';
                                    }
                                        echo $test;    
                                        echo '    
                                    </div>
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="thumb_img"><img src="https://s3.ap-south-1.amazonaws.com/homesfy.in/Floor/Kalpataru-Paramount-A.jpg" alt="floor-plan"><span class="tag_name">Floor Plan</span></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="thumb_img"><img src="https://s3.ap-south-1.amazonaws.com/homesfy.in/Map/Slide5.PNG" alt="kalpataru paramount a"><span class="tag_name">See Location</span></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="project_specs p-2 pl-3">Overview</h5>
                            </div>
                            <div class="col-md-2 col-6">
                                <ul class="list-unstyled text-center">
                                    <li><span class="over_prop">Possession</span></li>
                                    <li>
                                        <span class="text-capitalize">';
                                            echo (!empty($detail['possession'])) ? $detail['possession'] : "-";
                                        echo '</span></li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-6">
                                <ul class="list-unstyled text-center">
                                    <li><span class="over_prop">Facing</span></li>
                                    <li>
                                        <span>
                                        ';
                                            echo (!empty($detail['facing'])) ? $detail['facing'] : "-";
                                        echo '
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-6">
                                <ul class="list-unstyled text-center">
                                    <li><span class="over_prop">Property type</span></li>
                                    <li>
                                        <span class="text-capitalize">
                                        ';
                                            echo (!empty($detail['property_type'])) ? $detail['property_type'] : "-";
                                        echo '
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-6">
                                <ul class="list-unstyled text-center">
                                    <li><span class="over_prop">Furnish</span></li>
                                    <li>
                                        <span class="text-capitalize">
                                            ';
                                            echo (!empty($detail['furnish'])) ? $detail['furnish'] : "-";
                                        echo '
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-2">
                                <ul class="list-unstyled text-center">
                                    <li><span class="over_prop">Room Configuration</span></li>
                                    <li>
                                        <span>
                                            ';
                                            echo (!empty($detail['room_config'])) ? $detail['room_config'] : "-";
                                        echo '    
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="project_specs p-2 pl-3">Description</h5>
                                <div class="pl-4 p_value mb-3">
                                    <div>
                                        <span width="0">
                                          ';
                                            echo (!empty($detail['description'])) ? $detail['description'] : "-";
                                        echo '  
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <h5 class="project_specs p-2 pl-3">Amenities</h5>
                            </div>
                            ';
                            foreach ($detail['amenities'] as $amen){
                                echo '<div class="col-md-2 col-6">
                                        <ul class="list-unstyled text-center">
                                            <li>
                                                <span>
                                                    <i class="fas '.$arrIcon[$amen].' animity_icon darkColor"></i>
                                                </span>
                                            </li>
                                            <li> 
                                                <span class="animity_name text-capitalize">'.$amen.'</span>
                                            </li>
                                        </ul>
                                </div>';
                            }
                            echo '
                        </div>
                    </div>
                </section>';
        }else{

            echo '<div class="row">
                    <div class="col-md-12">
                        <h4>No Details Found !!!</h4>
                    </div>
                </div>';
        }
    ?>

</div>