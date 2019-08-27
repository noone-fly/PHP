package io.agora.javaapi;

import java.io.IOException;
import java.io.UnsupportedEncodingException;
import java.util.ArrayList;
import java.util.List;

import javax.xml.bind.DatatypeConverter;

import org.apache.http.HttpEntity;
import org.apache.http.NameValuePair;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.entity.UrlEncodedFormEntity;
import org.apache.http.client.methods.CloseableHttpResponse;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.CloseableHttpClient;
import org.apache.http.impl.client.HttpClients;
import org.apache.http.message.BasicNameValuePair;
import org.apache.http.util.EntityUtils;

public class KickingRule {

public static void main(String[] args) throws ClientProtocolException, IOException {
CloseableHttpClient httpClient = HttpClients.createDefault();
HttpPost httpPost = new HttpPost("https://api.agora.io/dev/v1/kicking-rule"); //踢人地址

String encoding = DatatypeConverter.printBase64Binary("<your customerID>:<your customer certificate>".getBytes("UTF-8"));
List<NameValuePair> nameValuePair = new ArrayList<NameValuePair>();
nameValuePair.add(new BasicNameValuePair("appid","<appid>")); //你的app ID
nameValuePair.add(new BasicNameValuePair("cname","<频道号>")); //频道号
nameValuePair.add(new BasicNameValuePair("uid","<uid>")); //需要踢的uid
nameValuePair.add(new BasicNameValuePair("ip","")); // 如果不根据IP来封人，就填空
nameValuePair.add(new BasicNameValuePair("time","5")); //封人时间

httpPost.setHeader("Authorization", "Basic " + encoding);
httpPost.setEntity(new UrlEncodedFormEntity(nameValuePair, "UTF-8"));

CloseableHttpResponse response = httpClient.execute(httpPost);
HttpEntity entity = response.getEntity();
String content = EntityUtils.toString(entity, "utf-8");
System.out.println(content);
System.out.println(httpPost.getURI());
System.out.println(response);
httpClient.close();
}

}