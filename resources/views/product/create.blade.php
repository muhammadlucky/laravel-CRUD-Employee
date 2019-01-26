<form method="POST" 
action="/Product">
{{ csrf_field() }}
<input type="text" name="txt_id"/>
<input type="text" name="txt_name" />
<input type="text" name="txt_price" />
<input type="images" name="images_image" />
<input type="text" name="txt_description" />

<input type="submit"
name="sbm_save"
id="sbm_save"
value="save" />

</form>