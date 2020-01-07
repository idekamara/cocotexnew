
<input type="submit" class="btn btn-primary" name="delete" value="Modifier">
<i class="fa fa-search" aria-hidden="true"></i>

 <form class="js-search topbar-search" id="topbar-search" method="get" action="/search">
            <span><a class="icon icon-search" href="/search"><i class="fa fa-search fa-lg"></i><input id="q" name="q" placeholder="Rechercher"></a></span>
          </form>

  <style> 

* {
  box-sizing: border-box;
}

input[type=texte] {
  width:60%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  float: left;
  background-color: white;
  background-image: url('');
  background-position: 5px 5px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out; 
}

}

/* Style the submit button */
form.search button {
  float: right;
  width: 50%;
  height: 50%;
  padding: 12px 20px 12px 40px;
  background: #2196F3;
  color: white;
  font-size: 16px;
  border: 2px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.search button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.search::after {
  content: "";
  clear: both;
  display: table;
}

input[type=texte]:focus {
  width: 85%;
}
</style>


<a class="btn btn-danger" href="#">
  <i class="fa fa-trash-o fa-lg"></i> Delete</a>

<form>
  <input type="texte" name="search" placeholder="Search..">
</form>




<div class="btn-group open">
  <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i> User</a>
  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
    <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
  </a>
  <ul class="dropdown-menu">
    <li><a href="#"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
    <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
    <li><a href="#"><i class="fa fa-ban fa-fw"></i> Ban</a></li>
    <li class="divider"></li>
    <li><a href="#"><i class="fa fa-unlock"></i> Make admin</a></li>
  </ul>
</div>