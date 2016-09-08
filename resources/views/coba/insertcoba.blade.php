<h1>insert data</h1>

<form class="" action="/admin/public/artikel" method="post">
	<input type="text" name="judulartikel" value="" placeholder="judul artikel"><br>
	<textarea name="kategori" rows="8" cols="40" placeholder="isi"></textarea>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="submit" value="post" name="name">
</form>
