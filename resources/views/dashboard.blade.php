<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maxium-scale=1">
	<title>Admin</title>
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" href="css/list/bootstrap.min.css" />
  	<link rel="stylesheet" href="css/list/nice-select.css" />
  	<link rel="stylesheet" href="css/list/font.css" />
  	<link rel="stylesheet" href="css/list/style.css" />


</head>
<body>

	<input type="checkbox" id="nav-toggle">

	<div class="sidebar">
		<div class="sidebar-brand">
			<h5><span class="lab la-accusoft"></span> <span>Seller</span></h5>
		</div>

		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="dashboard.php" class="active"><span class="las la-igloo"></span><span>Dashboard</span></a>
				</li>
				<li>
					<a href="{{ url('addproperty')}}"><span class="las la-igloo"></span><span>Add Property</span></a>
				</li>
				<li>
					<a href="package.php"><span class="las la-users"></span><span>Item Price</span></a>
				</li>
				<li>
					<a href="addcustomer.php"><span class="las la-clipboard-list"></span><span>Add Customer</span></a>
				</li>
				<li>
					<a href="customerhistory.php" ><span class="las la-users"></span><span>Customer History</span></a>
				</li>
				<li>
					<a href=""><span class="las la-shopping-bag"></span><span>Employee</span></a>
				</li>
				
				
	                <form method="POST" action="{{ route('logout') }}">
	                    @csrf
				        <x-dropdown-link :href="route('logout')"
	            		onclick="event.preventDefault();
	                    this.closest('form').submit();">				
				<li>
					 <span style="text-align:center;" class="las la-users"></span><span>{{ ('Log Out') }}</span>
				</li>
				</x-dropdown-link>
	                </form>

			</ul>
		</div>
	</div>

	<div class="main-content">
		<header>
			<h2>
				<label for="nav-toggle">
					<span class="las la-bars"></span>
				</label>
				{{ Auth::user()->name }}
			</h2>

			
		</header>

		<main>
			<div class="cards">

				<div class="card-single">
					<div>
					<h1>54</h1>
					<span>Total Client</span>	
					</div>

					<div>
						<span class="las la-users"></span>
					</div>
				</div>
				
			
				<div class="card-single">
					<div>
					<h1>54</h1>
					<span>Event Complete</span>	
					</div>

					<div>
						<span class="las la-clipboard-list"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
					<h1>54</h1>
					<span>Event Booking</span>	
					</div>

					<div>
						<span class="las la-shopping-bag"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
					<h1>2</h1>
					<span>Delivery On Process</span>	
					</div>

					<div>
						<span class="las la-hourglass-half"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
					<h1>Tk 219,500</h1>
					<span>Net Income</span>	
					</div>

					<div>
						<span class="lab la-google-wallet"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
					<h1>Tk 22,000</h1>
					<span>Offered Discount</span>	
					</div>

					<div>
						<span class="lab la-google-wallet"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
					<h1>10.02 %</h1>
					<span>Discount Rate</span>	
					</div>

					<div>
						<span class="lab la-google-wallet"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
					<h1>Tk 13,500</h1>
					<span>Total Due</span>	
					</div>

					<div>
						<span class="lab la-google-wallet"></span>
					</div>
				</div>	

				<!-- <div class="card-single">
					<div>
					<h1>Tk </h1>
					<span>Total Due</span>	
					</div>

					<div>
						<span class="lab la-google-wallet"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
					<h1>Tk </h1>
					<span>Total Due</span>	
					</div>

					<div>
						<span class="lab la-google-wallet"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
					<h1>Tk </h1>
					<span>Total Due</span>	
					</div>

					<div>
						<span class="lab la-google-wallet"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
					<h1>Tk 184,500</h1>
					<span>Total Income</span>	
					</div>

					<div>
						<span class="lab la-google-wallet"></span>
					</div>
				</div>	 -->	

			</div>


			<!-- <div class="recent-grid">
					<div class="projects">
						<div class="card">
							<div class="card-header">
								<h2>Recent Event History</h2>

								<button>See all<span class="las la-arrow-right"></span></button>
							</div>

							<div class="card-body">
								<div class="table-responsive">
									<table width="100%">
										<thead>
											<tr>
												<td>Event Date</td>
												<td>Client Name</td>
												<td>Status</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>UI/UX design</td>
												<td>UI team</td>
												<td>
													<span class="status purple"></span>
													review
												</td>
											</tr>
											<tr>
												<td>Web development</td>
												<td>Frontend</td>
												<td>
													<span class="status pink"></span>
													in progress
												</td>											
											</tr>
											<tr>
												<td>Ushop app</td>
												<td>Mobile team</td>
												<td>
													<span class="status orange"></span>
													pending
												</td>
											</tr>
											<tr>
												<td>UI/UX design</td>
												<td>UI team</td>
												<td>
													<span class="status purple"></span>
													review
												</td>
											</tr>
											<tr>
												<td>Web development</td>
												<td>Frontend</td>
												<td>
													<span class="status pink"></span>
													in progress
												</td>											
											</tr>
											<tr>
												<td>Ushop app</td>
												<td>Mobile team</td>
												<td>
													<span class="status orange"></span>
													pending
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							
						</div>
					</div>

					<div class="customers">
						<div class="card">
							<div class="card-header">
								<h3>New Customer</h3>

								<button>See all <span class="las la-arrow-right"></span></button>
							</div>
							<div class="card-body">
								

								<div class="customer">
									<div class="info">
										<img src="UserImage/2.jpg" width="40px" height="40px" alt="">
										<div>
											<h4>Customer 1</h4>
											<small>CEo expart</small>
										</div>
									</div>
									<div class="contact">
										<span class="las la-user-circle"></span>
										<span class="las la-comment"></span>
										<span class="las la-phone"></span>
									</div>
								</div>
								<div class="customer">
									<div class="info">
										<img src="UserImage/2.jpg" width="40px" height="40px" alt="">
										<div>
											<h4>Customer 2</h4>
											<small>CEo expart</small>
										</div>
									</div>
									<div class="contact">
										<span class="las la-user-circle"></span>
										<span class="las la-comment"></span>
										<span class="las la-phone"></span>
									</div>
								</div>
								<div class="customer">
									<div class="info">
										<img src="UserImage/2.jpg" width="40px" height="40px" alt="">
										<div>
											<h4>Customer 3</h4>
											<small>CEo expart</small>
										</div>
									</div>
									<div class="contact">
										<span class="las la-user-circle"></span>
										<span class="las la-comment"></span>
										<span class="las la-phone"></span>
									</div>
								</div>
								<div class="customer">
									<div class="info">
										<img src="UserImage/2.jpg" width="40px" height="40px" alt="">
										<div>
											<h4>Customer 4</h4>
											<small>CEo expart</small>
										</div>
									</div>
									<div class="contact">
										<span class="las la-user-circle"></span>
										<span class="las la-comment"></span>
										<span class="las la-phone"></span>
									</div>
								</div>
								<div class="customer">
									<div class="info">
										<img src="UserImage/2.jpg" width="40px" height="40px" alt="">
										<div>
											<h4>Customer 5</h4>
											<small>CEo expart</small>
										</div>
									</div>
									<div class="contact">
										<span class="las la-user-circle"></span>
										<span class="las la-comment"></span>
										<span class="las la-phone"></span>
									</div>
								</div>
								
								
							</div>
						</div>
						
					</div>
					
				</div> -->

				 <section>
        <div class="wrap bg-mylisting">
            <div class="container">
              <form action="My-Listings.php" id="form" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <!-- <div class="col-lg-6 col-md-12 d-flex align-items-center mt-lg-0 mt-2">
                        <h4 class="mylist-title">My Listings</h4>
                    </div> -->

                      <!-- <div class="col-lg-3 col-md-6 col-sm-6 align-items-center mt-lg-0 mt-2 ml-auto">
                        <a href="report-gen.php" name="" class="createme w-100">Create Report</a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 align-items-center mt-lg-0 mt-2 ml-auto">
                        <a href="Create-listing.php" class="createme">Create New Listing</a>
                    </div> -->

                </div>
             <!--    <h4 class="mb-1 mt-3">Filter</h4> -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 mt-2">
                        <select class="nice-select form-control" name="property_type" tabindex="0">
                            <option value="">Property Type</option>
                            <option value="Residential - Landed">Residential - Landed</option>
                            <option value="Residential - Condominium">Residential - Condominium</option>
                            <option value="Residential - HDB">Residential - HDB</option>
                            <option value="Commercial">Commercial</option>
                            <option value="Industrial">Industrial</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mt-2">
                        <select class="nice-select form-control" name="estate" tabindex="0">
                            <option value="">Estate</option>
                            <option value="Sembawang - North">Sembawang - North</option>
                            <option value="Woodlands - North">Woodlands - North</option>
                            <option value="Yishun - North">Yishun - North</option>
                            <option value="Ang Mo Kio - North-East">Ang Mo Kio - North-East</option>
                            <option value="Hougang - North-East">Hougang - North-East</option>
                            <option value="Punggol - North-East">Punggol - North-East</option>
                            <option value="Sengkang - North-East">Sengkang - North-East</option>
                            <option value="Serangoon - North-East">Serangoon - North-East</option>
                            <option value="Bedok - East">Bedok - East</option>
                            <option value="Pasir Ris - East">Pasir Ris - East</option>
                            <option value="Tampines - East">Tampines - East</option>
                            <option value="Bukit Batok - East">Bukit Batok - West</option>
                            <option value="Bukit Panjang - West">Bukit Panjang - West</option>
                            <option value="Choa Chu Kang - West">Choa Chu Kang - West</option>
                            <option value="Clementi - West">Clementi - West</option>
                            <option value="Jurong West - West">Jurong West - West</option>
                            <option value="Jurong West - West">Jurong West - West</option>
                            <option value="Tengah - West">Tengah - West</option>
                            <option value="Bishan - Central">Bishan - Central</option>
                            <option value="Bukit Merah - Central">Bukit Merah - Central</option>
                            <option value="Bukit Timah - Central">Bukit Timah - Central</option>
                            <option value="Central - Central">Central - Central</option>
                            <option value="Geylang - Central">Geylang - Central</option>
                            <option value="Marine Parade - Central">Marine Parade - Central</option>
                            <option value="Queenstown - Central">Queenstown - Central</option>
                            <option value="Toa Payoh - Central">Toa Payoh - Central</option>       
                        </select>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 mt-2 ">
                        <select class="nice-select form-control dist" name="district" tabindex="0">
                            <option value=""><span class="current" style="font-size: 10px;">District</span></option>
                            <option value="Boat Quay, Chinatown,City - Business District">
                                Boat Quay, Chinatown, 
                                City - Business District</option>
                            <option value="Anson Road, Chinatown,City - Business District">
                                Anson Road, Chinatown, 
                                City - Business District</option>
                            <option value="Alexandra Road, Tiong Bahru,Central South">
                                Alexandra Road, Tiong Bahru,
                                Central South</option>
                            <option value="Keppel, Mount Faber,South">
                                Keppel, Mount Faber, 
                                South</option>
                            <option value="Buona Vista, Dover,South West">
                                Buona Vista, Dover, 
                                South West</option>
                            <option value="City Hall, High Street,City - Business District">
                                City Hall, High Street, 
                                City - Business District</option>
                            <option value="Beach Road, Bencoolen Road,City">
                                Beach Road, Bencoolen Road, 
                                City</option>
                            <option value="Little India, Farrer Park,Central">
                                Little India, Farrer Park, 
                                Central</option>
                            <option value="Cairnhill, Killiney,Central - Orchard">
                                Cairnhill, Killiney, 
                                Central - Orchard</option>
                            <option value="Balmoral, Bukit Timah,Central - Near Orchard">
                                Balmoral, Bukit Timah, 
                                Central - Near Orchard</option>
                            <option value="Chancery, Bukit Timah,Central - Near Orchard">
                                Chancery, Bukit Timah, 
                                Central - Near Orchard</option>
                            <option value="Balestier, Moulmein,Central">
                                Balestier, Moulmein, 
                                Central</option>
                            <option value="Potong Pasir, Machpherson,Central East">
                                Potong Pasir, Machpherson,
                                Central East</option>
                            <option value="Eunos, Geylang,Central East">
                                Eunos, Geylang, 
                                Central East</option>
                            <option value="Katong, Marine Parade,East Coast">
                                Katong, Marine Parade, 
                                East Coast</option>
                            <option value="Bayshore, Bedok,Upper East Coast">
                                Bayshore, Bedok, 
                                Upper East Coast</option>
                            <option value="Changi, Loyang,Far East">
                                Changi, Loyang,
                                Far East</option>
                            <option value="Pasir Ris, Simei,Far East">
                                Pasir Ris, Simei,
                                Far East</option>
                            <option value="Hougang, Punggol,North East">
                                Hougang, Punggol,
                                North East</option>
                            <option value="Ang Mo Kio, Bishan,Central North">
                                Ang Mo Kio, Bishan, 
                                Central North</option>
                            <option value="Clementi, Upper Bukit Timah,Central West">
                                Clementi, Upper Bukit Timah, 
                                Central West</option>
                            <option value="Boon Lay, Jurong,Far West">
                                Boon Lay, Jurong,
                                Far West</option>
                            <option value="Bukit Batok, Choa Chu Kang,North West">
                                Bukit Batok, Choa Chu Kang,
                                North West</option>
                            <option value="Kranji, Lim Chu Kang,Far North West">
                                Kranji, Lim Chu Kang,
                                Far North West</option>
                            <option value="Admiralty, Woodlands,Far North">
                                Admiralty, Woodlands,
                                Far North</option>
                            <option value="Tagore, Yio Chu Kang,North">
                                Tagore, Yio Chu Kang,
                                North</option>
                            <option value="Admiralty, Sembawang,Far North">
                                Admiralty, Sembawang,
                                Far North</option>
                            <option value="Seletar, Yio Chu Kang,North East">
                                Seletar, Yio Chu Kang, 
                                North East</option>                                                           
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mt-2">
                        <input type="text" name="mrt" class="form-control" style="padding: 22px 20px;" placeholder="Nearby MRT">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mt-2">
                        <input type="text" name="p_from" class="form-control" style="padding: 22px 20px;" placeholder="Price From">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mt-2">
                        <input type="text" name="p_to" class="form-control" style="padding: 22px 20px;" placeholder="Price To">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mt-2">
                        <button type="submit" name="submit" id="btns" class="createme">Search</button>
                    </div>
                </div>

            </form>
            </div>
        </div>
    </section>



  <!-- Edit listing -->

  <section>
    <div class="wrap bg-edit-list">
      <div class="container">
        <div class="cover-edit-list ">
          <div class="cover-ed">
            
            <div class="list-img">
              
              <img src="1.jpg"/>
            
              <div class="list-tag">
                <p>fgfgfgfg</p>
              </div>
              <h6 class="edit-list-title">fghjfghfh</h6>
            </div>
            <div class="edit-details">
              <div class="d-flex justify-content-between c-edit">

                <p class="listing-title"><a href="">htherhrtjertj</a></p>
                <a href="">Edit Listing</a>
              </div>

              <p><span>ID: 65464 </span><span>rfgrfghfhgfhfh</span><span>25 sqft</span></p>
              <p> <span>ergrgrgrgrgrg</span><span>SGD 25645</span></p>
                <p class="listing-title text-right font-weight-bold"><a href="">View List</a></p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- js files -->


  <!-- js files -->
  <script src="js/popper-1.14.7.min.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap-4.3.1.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/custom.js"></script>




		</main>
		<footer class="footer">
            <h4>Designed by <a href="https://www.facebook.com/raisuddin.alvee.56/" target="blanck" style="color: black;">SM Alvee</a></h4>
        </footer>
	</div>
</body>
</html>