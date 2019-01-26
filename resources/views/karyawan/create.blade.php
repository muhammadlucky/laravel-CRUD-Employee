<form method="POST" 
action="/Karyawan">
{{ csrf_field() }}
<input type="text" name="txt_id"/>
<input type="text" name="txt_name" />
<input type="text" name="txt_address" />
<input type="text" name="txt_telpon" />

<input type="submit"
name="sbm_save"
id="sbm_save"
value="save" />

</form>