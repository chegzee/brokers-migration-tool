class IbUtility {
  constructor() {}

  date_diff(start, end) {
    let t = 0;
    let s = new Date(start).getTime();
    let e = new Date(end).getTime();
    if (s > e) {
      t = s - e;
    } else {
      t = e - s;
    }
    let v = t / (1000 * 60 * 60 * 24);
    return v;
  }

  datevalidity(date) {
    let arr = String(date).split("/");
    for (let i = 0; i < arr.length; i++) {
     if (parseInt(arr[0]) > parseInt(arr[1])) {
        let temp = arr[0];
        arr[0] = arr[1];
        arr[1] = temp;
      }
    }
      let v = arr[0] + "/" + arr[1] + "/" + arr[2];
      
    // v['trans_date'] = trans_date2[2] + '-' + ('00' + trans_date2[1]).slice(-2) + '-' + ('00' + trans_date2[0]).slice(-2);
    //  console.log(moment(v, 'MM/DD/YYYY').format('YYYY-MM-DD') );
    return v;
  }

  check(date) {
    let date_parse = parseInt(date);
    // console.log(date_parse);
    if (isNaN(date_parse)) {
      //   console.log(date_parse);
      return false;
    }
    let d = String(date);
    //   console.log(d);
    let arr = d.split("/");
    //   console.log(arr);
    let a = parseInt(arr[0]);
    let b = parseInt(arr[1]);
    let c = parseInt(arr[2]);
    if (isNaN(a) || isNaN(b)) {
      return false;
    } else {
      // console.log(arr.length);
      return true;
    }
  }
}
