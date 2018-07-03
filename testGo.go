/*
Program Date : 2018/07/02
Programmer : Jihun Park

*/
package main

import (
    "io/ioutil"
    "encoding/json"
    "net/http"
    "fmt"
)

const (
    api_key = "MjYyMC0xNDMyNzA2NTI2MDY5LWFiZGMyNTYxLTQ2MzUtNGQ3YS05YzI1LTYxNDYzNTJkN2EwZg=="
    client_id = "withit"
)

var api_url = "https://api.apistore.co.kr/ppurio" // ppurio basic url
var api_test_url = "https://api.apistore.co.kr/ppurio_test/1/message_test/sms/"+client_id
var api_option string // ppurio function url( ex./1/message/sms/withit )

/* 
   업체마다 요청 파라미터명이 다른 경우가 있기 때문에 
   receiverParam 자료형을 따로 만듦.
   key - Request parameter, value - 
*/
type receiverParam map[string]interface{}

/* Request body map */
type SmsRequest struct {
    requestParam map[string]string
    sendingSmsIndex []string
    ppurioParam receiverParam
}

type testStruct struct{}

//생성자 함수 정의
func indexSetting() *SmsRequest {
    s := SmsRequest{}
    s.sendingSmsIndex = []string{"service", "sender_name", "sender_phone", "receiver_name", "receiver_phone", "type", "title", "content"}
    
    return &s //포인터 전달
}

func handler(w http.ResponseWriter, r *http.Request) {

    switch r.Method {

        case "GET" :

    }
}
 
func main() {
    
    http.HandleFunc("/", handler)

    sms := indexSetting();
    fmt.Println(sms.getMemberList())
    //var jsonDecode
    //json.Unmarshal(bytes, &dat)
}

func (s SmsRequest) getMemberList() string {
    
    api_option = "/1/sendnumber/list/" + client_id // ppurio option url

    return s.getApi("GET", api_option)
}


func (s SmsRequest) getApi(sendMethod string, api_option string) interface{}{

    req, err := http.NewRequest(sendMethod, api_url + api_option, nil)
    
    if err == nil {
        panic(err)
    }

    req.Header.Add("x-waple-authorization", api_key)

    client := &http.Client{}
    resp, err := client.Do(req)

    if err != nil {
        panic(err)
    }
    defer resp.Body.Close()

    // 결과 출력
    
    bytes, _ := ioutil.ReadAll(resp.Body)
    
    
    return bytes
}