package com.littesandbox.clicksandbox;
import android.app.Activity;
import android.content.Context;
import android.widget.Toast;

//仿jquery
public class $ {
    public static Object select_id(Activity activity,int id)
	{
	Object obj=	activity.findViewById(id);
		return obj;
	}
	public static void set_val(Object obj,Object val)
	{

	}
	//toast
    public static void tip(Context ctx,Object obj)
	{
		Toast.makeText(ctx,obj,Toast.LENGTH_SHORT).show();
	}
}
