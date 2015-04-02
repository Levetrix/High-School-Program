    <div class="nav-container">
      <!-- Primary Nav-->
      <nav id="primary-nav" role="navigation">
        <ul>
          <!--li><a href="">About</a>
            <div class="mega">
              <ul class="links">
                <li class="featured">
                  <ul>
                    <li><a href="">Featured Link 1</a></li>
                    <li><a href="">Featured Link 2</a></li>
                  </ul>
                </li>
                <li><a href="#">Menu item 1</a></li>
                <li><a href="#">Menu item 2</a>
                  <ul class="sublinks">
                    <li><a href="">Submenu item 1</a></li>
                    <li><a href="">Submenu item 2</a></li>
                    <li><a href="">Submenu item 3</a></li>
                  </ul>
                </li>
                <li><a href="">Menu item 3</a></li>
                <li><a href="">Menu item 4</a></li>
                <li><a href="">Menu item 5</a></li>
                <li><a href="">Menu item 6</a></li>
              </ul>
              <div class="highlight"><a href="#"><img src="images/menu/menu1.jpg" alt="Menu image 1"></a>
                <p><a href="#">Picture Link</a></p>
                <p>Text text text text text.</p>
              </div>
              <div class="highlight"><a href="#"><img src="images/menu/menu2.jpg" alt="Menu image 2"></a>
                <p><a href="#">Picture Link</a></p>
                <p>Text text text text text.</p>
              </div>
            </div>
          </li>
          <li><a href="">Double Mega Dropdown Menu</a>
            <div class="mega">
              <ul class="links double">
                <li class="featured">
                  <ul>
                    <li><a href="">Featured Link 1</a></li>
                    <li><a href="">Featured Link 2</a></li>
                  </ul>
                </li>
                <li class="left">
                  <ul>
                    <li><a href="#">Menu item 1</a></li>
                    <li><a href="#">Menu item 2</a>
                      <ul class="sublinks">
                        <li><a href="">Submenu item 1</a></li>
                        <li><a href="">Submenu item 2</a></li>
                        <li><a href="">Submenu item 3</a></li>
                        <li><a href="">Submenu item 4</a></li>
                        <li><a href="">Submenu item 5</a></li>
                      </ul>
                    </li>
                    <li><a href="">Menu item 3</a></li>
                    <li><a href="">Menu item 4</a></li>
                    <li><a href="">Menu item 5</a></li>
                    <li><a href="">Menu item 6</a></li>
                  </ul>
                </li>
                <li class="left">
                  <ul>
                    <li><a href="">Menu item 7</a></li>
                    <li><a href="">Menu item 8</a></li>
                    <li><a href="">Menu item 9</a></li>
                    <li><a href="">Menu item 10</a></li>
                    <li><a href="">Menu item 11</a></li>
                    <li><a href="">Menu item 12</a></li>
                  </ul>
                </li>
              </ul>
              <div class="highlight"><a href="#"><img src="images/menu/menu1.jpg" alt="Menu image 3"></a>
                <p><a href="#">Picture Link</a></p>
                <p>Text text text text text.</p>
              </div>
              <div class="highlight"><a href="#"><img src="images/menu/menu2.jpg" alt="Menu image 4"></a>
                <p><a href="#">Picture Link</a></p>
                <p>Text text text text text.</p>
              </div>
            </div>
          </li>
          <li><a href="">Basic Dropdown Menu</a>
            <div class="sub">
              <ul class="links">
                <li><a href="">Menu item 1</a></li>
                <li><a href="">Menu item 2</a></li>
                <li><a href="">Menu item 3</a></li>
                <li><a href="">Menu item 4</a></li>
              </ul>
            </div>
          </li-->
          <!--<li><a href="#" class="single current">Current tab</a></li>-->
					<?php
						$site_root = $html_base_dir."/";
						$noOutput = true;
						include('about/folder-top-navigation.php');
						$menu_links[] = array("href" => $site_root."about","title" => "About","options"=>$folder_menu_links);
						$menu_links[] = array("href" => $site_root."register","title" => "Registration");
						include('program/folder-top-navigation.php');
						$menu_links[] = array("href" => "program","title" => "Program","options"=>$folder_menu_links);
						for($i=0;$i<count($menu_links);$i++) {
		          echo '          <li><a href="' . (($menu_links[$i]['href']!="")?$menu_links[$i]['href']:"#") . '" class="single' . (($_SERVER['SCRIPT_NAME'] == $menu_links[$i]['href'])?" current":"") . '">' . $menu_links[$i]['title'] . '</a>';
							if(isset($menu_links[$i]['options'])) {
								echo '<div class="sub"><ul class="links">';
								for($j=0;$j<count($menu_links[$i]['options']);$j++) {
									echo '	<li><a href="'.$menu_links[$i]['options'][$j]['href'].'">'.$menu_links[$i]['options'][$j]['title'].'</a></li>';
								}
								echo '</ul></div>'."\n";
							}
							echo '</li>'."\n";
						}
					?>
        </ul>
      </nav>
      <!-- Secondary Nav-->
      <nav id="secondary-nav" role="navigation">
				<ul>
					<li><a href="#">Students</a>
						<ul class="sub" style="">
							<li><a href="/site/contactus/student_support.cfm">Get Help</a></li>
							<li><a href="/site/courses/coursepolicies.cfm">Policies</a></li>
							<li><a href="/site/about/FAQ.cfm">General FAQs</a></li>
							<li><a href="/o2/index.cfm?event=public.login&amp;loginService=IS_LOGIN">Check My Grades</a></li>
							<li><a href="/site/courses/submitin.cfm" target="_blank">Submit Assignment</a></li>
							<li><a href="/site/support/find-testing-center.cfm">Find Testing Center</a></li>
							<li><a href="/site/courses/ordertrans.cfm">Request Transcript</a></li>
							<li><a href="/site/about/ferpa.cfm">Privacy</a></li>
							<li><a href="/site/financial/scholarship.cfm">Scholarships</a></li>
						</ul>
          </li>
          <li><a href="#">Parents</a>
					
						<ul class="sub" style="">
							<li><a href="/site/about/what-is.cfm">About Us</a></li>
							<li><a href="/site/courses/tuition.cfm">Tuition</a></li>
							<li><a href="/site/courses/index.cfm">Course Catalog</a></li>
							<li><a href="/site/programs/HighSchoolProgram.cfm">High School Programs</a></li>
						</ul>					
          </li>
          <li><a href="#">Educators</a>

						<ul class="sub" style="right: 0px;">
							<li><a href="/site/support/studentsprogress.cfm">Check Students' Progress</a></li>
							<li><a href="/site/courses/index.cfm">View Course Catalog</a></li>
							<li><a href="/site/financial/rewards.cfm">Rewards Program</a></li>
							<li><a href="/site/programs/purchase/index.cfm">Purchase Orders</a></li>
							<li><a href="/site/support/counselorfaq.cfm">Counselor FAQ</a></li>
							<li><a href="/site/support/proctorcert.cfm">Proctor Certification</a></li>
							<li><a href="/site/support/accessibility.cfm">Accessibility</a></li>
							<li><a href="/site/support/accommodations.cfm">Accommodations</a></li>
							<li><a href="/site/contactus/counselor_support.cfm">Contact State Representative</a></li>
							<li><a href="/site/courses/order.cfm">Request Catalog</a></li>
							<li><a href="/site/courses/preview.cfm">Course Preview Request</a></li>
							<li><a href="/site/about/newsletter.cfm">Newsletter Sign Up</a></li>
						</ul>
          </li>
        </ul>
      </nav>
    </div>
