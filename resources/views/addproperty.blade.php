<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maxium-scale=1">
	<title>packages</title>
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		.fill {
			width: 80%;
			height: 35px;
			border-radius: 4px;
			background-color: rgb(234, 247, 240);
		}
	</style>

</head>
<body>

	<input type="checkbox" id="nav-toggle">

	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span class="lab la-accusoft"></span> <span>Seller</span></h2>
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
			<div><h3 style="text-align: center; margin-bottom: 20px;">Add Details</h3></div>
			<form action="addcinepackage.php" method="post">

            <div>
            	<div>
            		<label>Property Type</label>
            	</div>
            	<div>
            		<select class="fill" name="property_type" >
                     <option value=""></option>
                      <option value="Residential - Landed">Residential - Landed</option>
                      <option value="Residential - Condominium">Residential - Condominium</option>
                      <option value="Residential - HDB">Residential - HDB</option>
                      <option value="Commercial">Commercial</option>
                      <option value="Industrial">Industrial</option>
                  </select>
            	</div>
            </div>
            <div>
            	<div>
            		<label>Property Type</label>
            	</div>
            	<div>
            		<select class="fill" name="estate" tabindex="0">
                      <option value=""></option>
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
            </div>
            <div >
                  <div>
                    <label for="">Districts</label>
                  </div>
                  <div>
    
                    <select class="fill"name="district" tabindex="0">
                      <option value=""></option>
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
                </div>

                <div>
                  <div>
                    <label for="">Name of property</label>
                  </div>
                  <div>
                    <input class="fill" type="text" class="form-control" name="property_name">
                  </div>
                </div>

                <div>
                  <div>
                    <label for="">Address</label>
                  </div>
                  <div>
                    <input class="fill" type="text" class="form-control" name="address">
                  </div>
                </div>

                <div>
                  <div>
                    <label for="">Postal code</label>
                  </div>
                  <div>
                    <input class="fill" type="text" class="form-control" name="postal_code">
                  </div>
                </div>

                <div>
                  <div>
                    <label for="">Nearby MRT</label>
                  </div>
                  <div >
                    <input class="fill" type="text" class="form-control" name="mrt">
                  </div>
                </div>

                <div>
                  <div>
                    <label for="">Nearby School</label>
                  </div>
                  <div >
                    <input class="fill" type="text" class="form-control" name="school">
                  </div>
                </div>

                <div>
                  <div>
                    <label for="">Commission Structure</label>
                  </div>
                  <div>
                  	<select class="fill">
                  		<option></option>
                  		<option>Market Sharing</option>
                  		<option>Commission Sharing</option>
                  	</select>
                  </div>                  
                </div>

                <div>
                  <div>
                    <label for="">Commission Percentage</label>
                  </div>
                  <div>
                    <div>
                      <input style="width: 50%; background-color: rgb(234, 247, 240); height: 35px; border-radius: 4px;" type="number" name = 'comm_percentage' class="form-control"><span class="input-group-text">%</span>
                    </div>
                  </div>
                </div>

                <div>
                  <div>
                    <label for="">Listing Type</label>
                  </div>
                  <div>
                  	<select class="fill">
                  		<option></option>
                  		<option>For Sale</option>
                  		<option>For Rent</option>
                  		<option>Room Rent</option>
                  		<option>Sublet</option>
                  	</select>
                  </div>                  
                </div>

                <div>
                  <div>
                    <label for="">Price (Tk)</label>
                  </div>
                  <div>
                    <div>
                      <input style="width: 50%; height: 35px; background-color: rgb(234, 247, 240); border-radius: 4px;" type="number" name = 'comm_percentage' class="form-control"><span class="input-group-text">Tk</span>
                    </div>
                  </div>
                </div>



				<!-- <table width="100%" style="background: #fff;">
				<thead>
					<tr>
						<td></td>
						<td><h3>Price</h3></td>
						<td><h3>Details</h3></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input style="width: 100%; height: 35px; border-radius: 4px;" type="text" name="package_name" required=""></td>
						<td><input style="width: 100%; height: 35px; border-radius: 4px;" type="number" name="price" required=""></td>
						<td><textarea style="width: 100%; height: 35px; border-radius: 4px;" type="number" name="details" required="" placeholder="Max 1000 characters"></textarea></td>
						<td>
							<input style=
										"color:#FFFFFF;
										background-color:#ccc;
										border-color:#fff;
										padding: .5rem;
										width: 100%"
									type="submit" name="submit" value="ADD">
						</td>
					</tr>
				</tbody>
			</table> -->
			



			</form>
		</main>
		<footer class="footer">
            <h4>Designed by <a href="https://www.facebook.com/raisuddin.alvee.56/" target="blanck" style="color: black;">SM Alvee</a></h4>
        </footer>
	</div>
</body>
</html>