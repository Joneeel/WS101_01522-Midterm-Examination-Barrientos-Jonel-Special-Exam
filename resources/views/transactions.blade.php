<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transaction') }}
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
        <th>Availability</th>
      </tr>
      <tr>
        <td>Aston Martin</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
      <tr>
        <td>Audi</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
      <tr>
        <td>Fortuner</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
      <tr>
        <td>Hilux</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
      <tr>
        <td>Raptor</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
      <tr>
        <td>BMW</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
      <tr>
        <td>Cadillac</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
      <tr>
        <td>BMW</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
      <tr>
        <td>Chevrolet</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
      <tr>
        <td>Ford</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
      <tr>
        <td>Ferrari</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
      <tr>
        <td>Datsun</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>   
    <tr>
        <td>Honda</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
      <tr>
        <td>Mercedes</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>   
    <tr>
        <td>Nissan</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
      <tr>
        <td>Porsche</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
      <tr>
        <td>Rolls-Royce</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
      <tr>
        <td>Toyota</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
      <tr>
        <td>Volkswagen</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
      <tr>
        <td>Fiat</td>
        <td><div class="dropdown">
            <button class="dropbtn">Mark</button>
            <div class="dropdown-content">
              <a href="#">Available</a>
              <a href="#">Not available</a>
            </div>
          </div></td>
      </tr>
    </table>
    </table>
    </body>
    </html>

    
</x-app-layout>
