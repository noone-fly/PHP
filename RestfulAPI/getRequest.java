package io.agora.javaapi;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;

import javax.xml.bind.DatatypeConverter;

import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.StatusLine;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.impl.client.HttpClientBuilder;

public class JavaNetURLRestfulApiClient {

public static void main(String[] args) throws ClientProtocolException, IOException {
//认证信息对象，用于包含访问翻译服务的用户名和密码
String path = "https://api.agora.io/dev/v1/project/?id=<你的app ID>>&name=<Your project name>";

HttpClient httpclient = HttpClientBuilder.create().build();
HttpGet httpget = new HttpGet(path);

String encoding = DatatypeConverter.printBase64Binary(
"<你的customerID>:<你的customer certificate>".getBytes("UTF-8"));

httpget.setHeader("Authorization", "Basic " + encoding);
HttpResponse response = httpclient.execute(httpget);
StatusLine statusLine = response.getStatusLine();
int responseCode = statusLine.getStatusCode();

System.out.println(responseCode);
if (responseCode == 200) {
HttpEntity entity = response.getEntity();
InputStream input = entity.getContent();
BufferedReader br = new BufferedReader(new InputStreamReader(input));
String str1 = br.readLine();
String result = new String(str1.getBytes("gbk"), "utf-8");
System.out.println("服务器的响应是:" + result);
br.close();
input.close();
} else {
System.out.println("响应失败!");
}
}

}