# stickCSS
make tables with sticky header and left sticky colons with CSS postion:sticky and minimal javascript  

Demo: https://hgsweb.de/stickyCSS


# makeSticky Function

The `makeSticky` function is a JavaScript utility designed to make specified columns and headers of an HTML table sticky during scrolling. It dynamically generates CSS styles to achieve the desired sticky behavior.

## Usage

```javascript
makeSticky('yourTableId', {
  toff: 10,       // Top offset where stickyness sarts
  loff: 20,       // Left offset where stickyness sarts
  col: 2          // Number of columns to make sticky
});
```
## Parameters

- id: 
The ID of the table or the table object itself.

- config (optional):
An object containing configuration options such as top offset (toff), left offset (loff), and the number of columns to make sticky (col).  

## Functionality   
<br>  
Dynamically generates CSS styles for making specific columns and headers sticky.  

Provides options for customizing the top and left offsets.  

Handles scenarios where certain header cells might be out of scope due to colspan.  


## Example  
<br> 
  
Consider the following HTML:  
**Note:** the table must have an **id** and **&lt;thead>&lt;/thead>** specified

```
<table id="exampleTable">
<thead>
    <tr>
        <th colspan='4' style='position:sticky;left:0;text-align:center'> 111 </th> 
    <tr>
        <th>Name<br>Lastname</th>
        <th>Email</th>
        <th>Phone</th> <th>Other</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>John Doe</td>
        <td>john@example.com</td>
        <td>123-456-7890</td> <td>yesyes</td>
    </tr>
    <tr>
        <td>John Doe</td>
        <td>john@example.com</td>
        <td>123-456-7890</td>  <td>nono</td>
    </tr>
    </tbody>
</table>
``` 
You can make the table sticky with the following JavaScript code:
```javascript
makeSticky('exampleTable', {
  toff: 10,
  loff: 20,
  col: 1
});
```  
  

This will move the table to the given offsets, makes a sticky header and one sticky column 'Name' 


## License
This utility is provided under the MIT License.

Have fun.
