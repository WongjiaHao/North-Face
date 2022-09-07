"use strict";

function setCookie(key, value, t1) {
  //判断t1是否有值
  if (t1) {
    console.log(t1); //计算存储时间

    var t1 = new Date() - 8 * 3600 * 1000 + t1 * 1000; //创建cookie

    document.cookie = "".concat(key, "=").concat(value, ";expires=").concat(new Date(t1));
  } else {
    document.cookie = "".concat(key, "=").concat(value);
  }
} //获取指定的cookie


function getCookie(key) {
  //获取当前所有cookie
  var cookis = document.cookie; //分割字符串

  var ar1 = cookis.split('; '); //遍历数组元素

  for (var i = 0; i < ar1.length; i++) {
    //继续分割数组元素
    var ar2 = ar1[i].split('='); //判断当前数组中第一个元素是否等于key

    if (ar2[0] == key) {
      return ar2[1];
    }
  }
} //删除cookie


function removeCookie(key) {
  setCookie(key, '', -1);
}