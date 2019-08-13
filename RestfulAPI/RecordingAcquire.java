package io.agora.javaapi;

import java.io.IOException;
import javax.xml.bind.DatatypeConverter;
import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.ParseException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.entity.StringEntity;
import org.apache.http.impl.client.HttpClients;
import org.apache.http.util.EntityUtils;

//{"resourceId":"RrCi4XQBEUIoCdZLAWdRJLVK4_3ppnaJGghIoDZuC3HGNOb-x2I8AXJj_2evYwEx12wmwz04Ik03j8DKekkisQcKKgHqP2IeFt_NigcILOKdp0320OAX4d-gFHWqWdaP56bhnV-g3tJG-1nQGIjco8pDnAQvPqPYIfbqeq2VHpQloUnpn_TcOyDcEoLTHlVqt6uqq8YOfoMnhX6re-iie2eQyxskhOsyBVIyxdUCPT4"}
//https://api.agora.io/v1/apps/<appid>/cloud_recording/acquire
//HttpResponseProxy{HTTP/1.1 200 0 [Content-Type: application/json, Content-Length: 253, Connection: keep-alive, X-RateLimit-Limit-second: 10, X-RateLimit-Remaining-second: 9, Accept-Ranges: bytes, Access-Control-Allow-Origin: *, X-Request-ID: 7ed81b0e-a3b6-4251-9628-c46ba37e5db5] ResponseEntityProxy{[Content-Type: application/json,Content-Length: 253,Chunked: false]}}
public class CloudRecording1 {
    public static void main(String[] args) throws ParseException, IOException {
        // TODO Auto-generated method stub
        HttpClient httpClient = HttpClients.createDefault();
        HttpPost httpPost = new HttpPost("https://api.agora.io/v1/apps/<appid>/cloud_recording/acquire");

        String encoding = DatatypeConverter.printBase64Binary("<customer ID>:<customer certificate>".getBytes("UTF-8"));
        String body = "{\"cname\":\"<频道号>\", \"uid\":\"<录制uid>\", \"clientRequest\":{}}";

        httpPost.setHeader("Content-type", "application/json;charset=utf-8");
        httpPost.setHeader("Authorization", "Basic " + encoding);
        httpPost.setEntity(new StringEntity(body));

        HttpResponse response = httpClient.execute(httpPost);
        HttpEntity entity = response.getEntity();
        String content = EntityUtils.toString(entity, "utf-8");
        System.out.println(content);
        System.out.println(httpPost.getURI());
        System.out.println(response);
    }
}