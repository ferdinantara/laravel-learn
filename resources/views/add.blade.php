<!DOCTYPE html>
<html>
<head>
	<title>add page</title>
</head>
<body>

	<h2>add books page</h2>

	<a href="/books"> <- back to main page</a>
	
	<br/>
	<br/>

	<form action="/books/store" method="post">
		{{ csrf_field() }}
        <table>
        <tr>
            <td>
		        id
            </td>
            <td> 
                <input type="text" name="id" required="required">
            </td>
        </tr>
        <tr>
            <td>
                Judul
            </td>
            <td>
                <input type="text" name="judul" required="required">    
            </td> 
        </tr>
        <tr>
            <td>
                penerbit 
            </td>
            <td>
                <input type="text" name="penerbit" required="required">
            </td>   
        </tr>
        <tr>
            <td>
                tahun terbit
            </td>
            <td>
                <input type="text" name="tahun_terbit" required="required">
            </td>
        </tr>
        <tr>
            <td>
                pengarang
            </td>
            <td>
                <input type="text" name="pengarang" required="required">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="save data">
            </td>
        </tr>
		</table>	
	</form>

</body>
</html>