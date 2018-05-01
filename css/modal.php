<?php
   
 echo ' 
   	/* Modal Box

#modalCheck{
display: none;
}
*/
.modalLayer{
  overflow: auto;
  display: none;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.5);
}
';

foreach (glob("include/*.php") as $filename)
			
			{
			    echo '#'.$filename.':target{
display: block;
}';
			}

echo '
 #add_dial:target, #add_item:target{
display: block;
}
.popup_block{

  background: rgba(230, 230, 250, 0.7);
  padding: 20px;
  border: 0 solid rgb(219, 54, 174, 0.4);
  position: relative;
  margin: 5% auto;
  width: 60%;
  box-shadow: 0px 0px 20px #000;
  border-radius: 10px;
}

.popup_block#exp{
background: rgba(230, 230, 250, 0.7);
padding: 20px;
border: 0 solid rgb(219, 54, 174, 0.4);
position: relative;
margin: 5% auto;
width: 80%;
box-shadow: 0px 0px 20px #000;
border-radius: 10px;
}

img.btn_close {
float: right;
margin: -55px -55px 0 0;
cursor: pointer;
}

.button{
cursor: pointer;
color: blue;
text-decoration: underline;
}
/* Modal Box end */ 
';
?>
