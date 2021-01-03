package com.littesandbox.clicksandbox;
import java.util.ArrayList;

public class ArrayUtilCore
{
    //Sttring[]转ArrayList<String>
    public ArrayList<String> toUsefulStringArray(String[] str_array)
    {
        ArrayList<String> result=new ArrayList<String>();
        for(int i=0;i<str_array.length;i++)
        {
            result.add(str_array[i]);
        }
        return result;
    }
    //参数1 字符串数组 参数2要查询的字符串
    //用于获取字符串数组中的字符串的位置
    public int getStrIndex(String[] strArray,String witchStr)
    {
        int index=toUsefulStringArray(strArray).indexOf(witchStr);
        return index;
        
    }
    
}
