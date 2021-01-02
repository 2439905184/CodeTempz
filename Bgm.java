package com.littesandbox.clicksandbox;
import java.io.File;
import android.media.MediaPlayer;
import android.content.Context;
//Bgm工具来
public class Bgm
{
	File bgmfile;
	MediaPlayer player;
	//初始化 R.raw.文件名引用方式初始化
	public void init(Context ctx,int ResourceId)
	{
		//bgmfile=new File("");
		player=MediaPlayer.create(ctx,R.raw.Greippi);
		// bgm.setLooping(true);
	}
	//文件方式初始化
	public void init(Context ctx,File file)
	{
		//todo:文件方式
		player=MediaPlayer.create(ctx,);
	}
	//assert内部文件方式
/*	public void init(Context ctx,AssertManager )
	{
		//todo:文件方式
		player=MediaPlayer.create(ctx,);
	}*/

	public void setloop(boolean loopMode)
	{
		if(loopMode)
		{
			player.setLooping(loopMode)
		}
			else
			{
				player.setLooping(loopMode)
			}
	}
     public void play()
	 {
		 player.start();
	 }
	public void stop()
	{
		player.stop();
	}

}
