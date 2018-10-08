<center>
      <form action="/hping/{{session('gid')->gid}}">
        <input type="radio" name="gping" checked value="1">好评
        <input type="radio" name="gping" value="2">差评
        <textarea cols="100" rows="20" name="content"></textarea>
        <input type="submit" value="评论">
      </form>
</center>