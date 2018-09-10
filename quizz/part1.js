 function validate(){  
var Id=document.form.Id.value;  
var Name=document.form.Name.value; 
var Lastname=document.form.Lastname.value;  
  
if (Id==null || Id==""){  
  window.alert("Id can't be blank");  
  return false;  
}else if(Name==null || Name==""){  
  window.alert("Name can't be empty.");  
  return false;  
  }  
  else if(Lastname==null || Lastname==""){  
  window.alert("LastName can't be empty.");  
  return false;  
  }  
} 
 
	 