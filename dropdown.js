function toggleDropdown()
{
	var dropdown = document.getElementById("myDropdown");
	var computedStyle = window.getComputedStyle(dropdown);
	
	if (computedStyle.getPropertyValue('display')==="none") 
	{
        dropdown.style.display = "block";
    } else 
	{
        dropdown.style.display = "none";
    }
}