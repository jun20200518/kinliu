function showSubmitError(res, parentNode, targetNode) {
  removeWarning();
  let warningMsg = document.createElement("section");
  warningMsg.classList.add("warning");
  warningMsg.textContent = res.data.message;
  document
    .querySelector(parentNode)
    .insertBefore(warningMsg, document.querySelector(targetNode));
}

function removeWarning() {
  if (document.querySelectorAll(".warning")) {
    document.querySelectorAll(".warning").forEach(dom => dom.remove());
  }
}

function settime(countdown) {
  var btn = $(".recommend_btn");
  if (countdown == 0) {
    btn.attr("disabled", false);
    btn.text("获取验证码");
    btn.removeClass("disabled");
    countdown = 5;
    return;
  } else {
    btn.addClass("disabled");
    btn.attr("disabled", true);
    btn.text("重新传送(" + countdown + ")");
    countdown--;
  }
  setTimeout(settime, 1000, countdown);
}

function postData(url, data) {

  // Default options are marked with *
  return fetch(url, {
    body: JSON.stringify(data), // must match 'Content-Type' header
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin', // include, same-origin, *omit
    headers: {
      'user-agent': 'Mozilla/4.0 MDN Example',
      'content-type': 'application/json'
    },
    method: 'POST', // *GET, POST, PUT, DELETE, etc.
    mode: 'cors', // no-cors, cors, *same-origin
    redirect: 'follow', // manual, *follow, error
    referrer: 'no-referrer', // *client, no-referrer
  })
      .then(res => {
        console.log(res.json());
        // if (res.data.type === "0") {
        //   window.location.replace(
        //       "https://zb.objkss.cc/index.php?r=web/index/index"
        //   );
        // } else {
        //   showSubmitError(res, "#login form", "#login button");
        // }
      })
      .then(() => {
        document.querySelector('#login input[type="tel"]').value = "";
        login.account = "";

        document.querySelector('#login input[type="password"]').value = "";
        login.password = "";
      }); // 輸出成 json
}

//login form
(function() {
  let data = {
    account: "",
    password: ""
  };


  document.querySelectorAll("#login input").forEach(dom =>
    dom.addEventListener("keyup", e => {
      data[e.target.name] = e.target.value;
    })
  );

  document.querySelector("#login form").addEventListener("submit", e => {
    e.preventDefault();

    // postData('https://zb.objkss.cc/index.php?r=web/webapi/login1', data)
    //     .then(data => console.log(data)) // JSON from `response.json()` call

    let data1 = new FormData();
    data1.append('account','0911111111');
    data1.append('password','123456');
    axios({
      method: "post",
      url: "https://zb.objkss.cc/index.php",
      data: {
        account: data.account,
        password: data.password
      },
      params:{
        r: "web/webapi/loginpost"
      }
    })
      .then(res => {
        console.log("data:",data)
        if (res.data.type === "0") {

          window.location.replace(
            "https://zb.objkss.cc/index.php?r=web/index/index"
          );
        } else {
          showSubmitError(res, "#login form", "#login button");
        }
      })
      .then(() => {
        document.querySelector('#login input[type="tel"]').value = "";
        login.account = "";

        document.querySelector('#login input[type="password"]').value = "";
        login.password = "";
      });
  });
})();

//register form
(function() {
  let data = {
    name: "",
    phone: "",
    password: "",
    repassword: "",
    recommend_code: "",
    verification_code: ""
  };
  let receive_code = "";
  let inputLocked = false;

  document.querySelectorAll("#registered input").forEach(dom => {
    dom.addEventListener("compositionstart", () => {
      inputLocked = true;
    });

    dom.addEventListener("compositionend", e => {
      inputLocked = false;
      data[e.target.name] = e.target.value;
    });

    dom.addEventListener("input", e => {
      if (!inputLocked) {
        data[e.target.name] = e.target.value;
      }
    });
  });

  document
    .querySelector("#registered button.recommend_btn")
    .addEventListener("click", e => {
      e.preventDefault();
      removeWarning();
      if (data.phone.length < 8 || data.phone.length > 11) {
        let warningMsg = document.createElement("section");
        warningMsg.classList.add("warning");
        warningMsg.textContent = "请输入正确电话号码";
        document
          .querySelector("#registered form")
          .insertBefore(
            warningMsg,
            document.querySelector('#registered button[type="submit"]')
          );
        return;
      }
      settime(60);
      axios({
        method: "get",
        url: "https://zb.objkss.cc/index.php?r=web/webapi/sendsms",
        params: {
          phone: data.phone
        }
      }).then(res => {
        receive_code = res.data.number;
        showSubmitError(
          res,
          "#registered form",
          'registered button[type="submit"]'
        );
      });
    });



  document.querySelector("#registered form").addEventListener("submit", e => {
    e.preventDefault();
    if (receive_code !== data.verification_code) {
      removeWarning();
      let warningMsg = document.createElement("section");
      warningMsg.classList.add("warning");
      warningMsg.textContent = "验证码错误，请重新输入";
      document
        .querySelector("#registered form")
        .insertBefore(
          warningMsg,
          document.querySelector('#registered button[type="submit"]')
        );
      return;
    }
    axios({
      method: "get",
      url: "https://zb.objkss.cc/index.php?r=web/webapi/registered",
      params: {
        name: data.name,
        phone: data.phone,
        password: data.password,
        repassword: data.repassword,
        recommend_code: data.recommend_code,
        verification_code: data.verification_code
      }
    }).then(res => {
      if (res.data.type === "0") {
        swal({
          title: "注册成功",
          icon: "success",
          timer: 2000
        });
      } else {
        showSubmitError(
          res,
          "#registered form",
          'registered button[type="submit"]'
        );
      }
      document
        .querySelectorAll("#registered input")
        .forEach(dom => (dom.value = ""));
      data = {
        name: "",
        phone: "",
        password: "",
        repassword: "",
        recommend_code: "",
        verification_code: ""
      };
    });
  });
})();

//forgetpw form
(function() {
  let data = {
    phone: "",
    password: "",
    repassword: "",
    verification_code: ""
  };
  let receive_code = "";
  let inputLocked = false;

  document.querySelectorAll("#forgetpw input").forEach(dom =>
    dom.addEventListener("keyup", e => {
      data[e.target.name] = e.target.value;
    })
  );

  document.querySelector("#forgetpw form").addEventListener("submit", e => {
    e.preventDefault();
    if (receive_code !== data.verification_code) {
      removeWarning();
      let warningMsg = document.createElement("section");
      warningMsg.classList.add("warning");
      warningMsg.textContent = "验证码错误，请重新输入";
      document
          .querySelector("#forgetpw form")
          .insertBefore(
              warningMsg,
              document.querySelector('#forgetpw button[type="submit"]')
          );
      return;
    }
    axios({
      method: "get",
      url: "https://zb.objkss.cc/index.php?r=web/webapi/forgetpwd",
      params: {
        phone: data.phone,
        password: data.password,
        repassword: data.repassword,
        verification_code: data.verification_code
      }
    }).then(res => {
      showSubmitError(res, "#forgetpw form", "forgetpw button");
      document
        .querySelectorAll("#forgetpw input")
        .forEach(dom => (dom.value = ""));
      data = {
        phone: "",
        password: "",
        repassword: ""
      };
    });
  });
  document
      .querySelector("#forgetpw button.recommend_btn")
      .addEventListener("click", e => {
        e.preventDefault();
        removeWarning();
        console.log("點擊按鈕")
        if (data.phone.length < 8 || data.phone.length > 11) {
          let warningMsg = document.createElement("section");
          warningMsg.classList.add("warning");
          warningMsg.textContent = "请输入正确电话号码";
          document
              .querySelector("#forgetpw form")
              .insertBefore(
                  warningMsg,
                  document.querySelector('#forgetpw button[type="submit"]')
              );
          return;
        }
        settime(60);
        axios({
          method: "get",
          url: "https://zb.objkss.cc/index.php?r=web/webapi/sendsms",
          params: {
            phone: data.phone
          }
        }).then(res => {
          receive_code = res.data.number;
          showSubmitError(
              res,
              "#forgetpw form",
              'forgetpw button[type="submit"]'
          );
        });
      });

})();
