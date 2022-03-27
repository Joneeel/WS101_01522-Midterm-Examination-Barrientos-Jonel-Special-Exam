<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Setting') }}
        </h2>
    </x-slot>
    <style>
        .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 5px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>





<!DOCTYPE html>
    <html>
    <head>
    <style>
    .title{
      text-align: center;
      font-size: 25px;
   
        }
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    </style>
    </head>
    <body>
    <div class="title"
    <h2><b>Car List</b></h2>
    </div>
    <table>
      <tr>
        <th>Cars</th>
        <th>Model</th>
        <th>License Plate</th>
        <th>Available</th>
        <th>Add/Remove</th>
      </tr>
      <tr>
        <td>Aston Martin</td>
        <td>6 Vulcan</td>
        <td>9DT49</td>
        <td>✓</td>
        <td>
            <div class="dropdown">
            <button class="dropbtn">Add/Remove</button>
            <div class="dropdown-content">
              <a href="#">Add</a>
              <a href="#">Remove</a>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>Audi</td>
        <td>Audi A8</td>
        <td>72B472</td>
        <td>✓</td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>

      <tr>
        <td>Fortuner</td>
        <td>2.4 GD-6 Automatic</td>
        <td>FKV5292</td>
        <td></td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>

      <tr>
        <td>Hilux</td>
        <td>N70</td>
        <td>GWS8430</td>
        <td>✓</td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>
      <tr>
        <td>Raptor</td>
        <td>F-150</td>
        <td>420 HWU</td>
        <td></td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>

      <tr>
        <td>BMW</td>
        <td>Z4 (G29)</td>
        <td>1107443</td>
        <td>✓</td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>

      <tr>
        <td>Cadillac</td>
        <td>CTS-V Gen 1</td>
        <td>7SGR308</td>
        <td></td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>

      <tr>
        <td>BMW</td>
        <td>X6 (G06)</td>
        <td>8DZS013</td>
        <td></td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>

      <tr>
        <td>Chevrolet</td>
        <td>9 2018 Chevrolet Tahoe</td>
        <td>7AAA910</td>
        <td>✓</td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>

      <tr>
        <td>Ford</td>
        <td>Ford Endeavour</td>
        <td>964HJV</td>
        <td></td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>

      <tr>
        <td>Ferrari</td>
        <td>365 GTB/4</td>
        <td>CKS2728</td>
        <td></td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>

      <tr>
        <td>Datsun</td>
        <td>UK dætsən</td>
        <td>IMK332</td>
        <td></td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>  

    <tr>
        <td>Honda</td>
        <td>Honda CR-V</td>
        <td>7NVR388</td>
        <td>✓</td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>

      <tr>
        <td>Mercedes</td>
        <td>GLE 350</td>
        <td>7JOD848</td>
        <td>✓</td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr> 

    <tr>
        <td>Nissan</td>
        <td>VERSA® SEDAN</td>
        <td>FZ7818</td>
        <td>✓</td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>

      <tr>
        <td>Porsche</td>
        <td>Macan SUVs</td>
        <td>S1Y502</td>
        <td></td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>

      <tr>
        <td>Rolls-Royce</td>
        <td>1 Phantom</td>
        <td>JWJ9941</td>
        <td>✓</td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>

      <tr>
        <td>Toyota</td>
        <td>Avalon</td>
        <td>7AJN859</td>
        <td></td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>

      <tr>
        <td>Volkswagen</td>
        <td>Atlas</td>
        <td>CZNU70</td>
        <td>✓</td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>

      <tr>
        <td>Fiat</td>
        <td>124 SPIDER	</td>
        <td>JWB 1760</td>
        <td></td>
        <td>
            <div class="dropdown">
                <button class="dropbtn">Add/Remove</button>
                <div class="dropdown-content">
                  <a href="#">Add</a>
                  <a href="#">Remove</a>
                </div>
              </div>
        </td>
      </tr>

    </table>
    </table>
    </body>
    </html>
</x-app-layout>