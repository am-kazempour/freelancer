var host_name = "http://localhost";
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}

// develop by amin delete freelancer accout
function freelancer_delete()
{
	if(confirm("Are you sure you want to delete your account?!!!"))
	{
		location.replace(host_name+"/freelancer/delete");
	}

}
function employer_delete()
{
	if(confirm("Are you sure you want to delete your account?!!!"))
	{
		location.replace(host_name+"/employer/delete");
	}

}

// develop by amin 
