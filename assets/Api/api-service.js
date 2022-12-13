var isProduction = true;
//var API_BASE_URL = 'https://ppab.a2hosted.com/peapi_vansale_back_end/api/WebApis/';
var API_BASE_URL = 'http://localhost/peapi/peapi-vansale-back-end-php-web-app/api/RestApis/';


function logD(data, key = 'Nes3T', flagNo = 10) {
    var logMsg = null;
    if (data !== null) {

        logdata = (typeof data !== "object" ? data : (JSON.stringify(data)));

        let logdataLength = logdata.length;

        var maxlengthlogData2Print = flagNo;

        if (typeof maxlengthlogData2Print !== "number" || maxlengthlogData2Print <= 0) {
            maxlengthlogData2Print = logdataLength;
        }

        logdata = logdataLength < maxlengthlogData2Print ? logdata : (logdata.substring(0, maxlengthlogData2Print));
        logMsg = key + '=>' + logdata;
    } else {
        logMsg = key + '=>' + data;

    }

    if (typeof flagNo !== "number") {
        logMsg = logMsg + ", flag = " + flagNo;
    }
    if (!isProduction) {
        console.log(logMsg);
    }
}

function isJson(item) {
    item = typeof item !== "string" ?
        JSON.stringify(item) :
        item;

    try {
        item = JSON.parse(item);
    } catch (e) {
        return false;
    }

    if (typeof item === "object" && item !== null) {
        return true;
    }

    return false;
}


function postReq(callback, reqbody, header, serviceTag) {

    // start loader here....
if(serviceTag!='login')
{

    var element = document.getElementById("custom_loader");
    element.classList.add("loading");
}

    //document.querySelector('body').classList.remove('loaded');
    var the_error = null;
    var the_response = null;
    var the_serviceTag = serviceTag;
    var url = API_BASE_URL + the_serviceTag;

    axios.post(url, {
            "inputs": reqbody,
            "modecode": 100
        }, {
            "headers": header
        })
        .then(response => {

            the_response = response.data;
            logD(response);
        })
        .catch(error => {

            the_error = error;
            logD(the_error, 'catch area');
        })

    .finally(() => {
        logD(the_response, 'finally res', 'full');
        logD(the_error, 'finally errro');

        if(serviceTag!='login')
        {

        var element = document.getElementById("custom_loader");
        element.classList.remove("loading");
        }

        //stop loader here.
        //document.querySelector('body').classList.add('loaded');

        if (the_error !== null) {

            vue_app.callback(the_error, the_serviceTag, null);

        } else {

            if (the_response !== null && isJson) {

                if (the_response.errorcode === 0) {

                    vue_app.callback(the_response.errorcode,the_response.errormessage, the_serviceTag, the_response.values);
                } else {
                    vue_app.callback(the_response.errorcode,the_response.errormessage, the_serviceTag, the_response.values);
                }

            } else {
                vue_app.callback('This is not an expected response [JOSON]', the_serviceTag, null);
            }


        }

    });
}