<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
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
        <th>Available</th>
        <th>Not Available</th>
      </tr>
      <tr>
        <td>Aston Martin</td>
        <td>✓</td>
        <td></td>
      </tr>
      <tr>
        <td>Audi</td>
        <td></td>
        <td>✓</td>
      </tr>
      <tr>
        <td>Fortuner</td>
        <td></td>
        <td>✓</td>
      </tr>
      <tr>
        <td>Hilux</td>
        <td>✓</td>
        <td></td>
      </tr>
      <tr>
        <td>Raptor</td>
        <td>✓</td>
        <td></td>
      </tr>
      <tr>
        <td>BMW</td>
        <td>✓</td>
        <td></td>
      </tr>
      <tr>
        <td>Cadillac</td>
        <td></td>
        <td>✓</td>
      </tr>
      <tr>
        <td>BMW</td>
        <td>✓</td>
        <td></td>
      </tr>
      <tr>
        <td>Chevrolet</td>
        <td></td>
        <td>✓</td>
      </tr>
      <tr>
        <td>Ford</td>
        <td>✓</td>
        <td></td>
      </tr>
      <tr>
        <td>Ferrari</td>
        <td>✓</td>
        <td></td>
      </tr>
      <tr>
        <td>Datsun</td>
        <td></td>
        <td>✓</td>
      </tr>   
    <tr>
        <td>Honda</td>
        <td>✓</td>
        <td></td>
      </tr>
      <tr>
        <td>Mercedes</td>
        <td></td>
        <td>✓</td>
      </tr>   
    <tr>
        <td>Nissan</td>
        <td>✓</td>
        <td></td>
      </tr>
      <tr>
        <td>Porsche</td>
        <td></td>
        <td>✓</td>
      </tr>
      <tr>
        <td>Rolls-Royce</td>
        <td>✓</td>
        <td></td>
      </tr>
      <tr>
        <td>Toyota</td>
        <td>✓</td>
        <td></td>
      </tr>
      <tr>
        <td>Volkswagen</td>
        <td>✓</td>
        <td></td>
      </tr>
      <tr>
        <td>Fiat</td>
        <td></td>
        <td>✓</td>
      </tr>
    </table>
    </table>
    </body>
    </html>
    
</x-app-layout>
