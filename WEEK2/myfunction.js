function calbmi() {
    let weight = document.getElementById("weight").value;
    let height = document.getElementById("height").value;
    if (weight == "" || height == "") {
        alert("กรุณาป้อนค่าน้ำหนักและส่วนสูง")
        return
    }
    //คำนวณ BMI
    let bmi = weight / Math.pow(height / 100, 2);
    let result = ''
    let risk = ''
    if (bmi < 18.5) {
        result = "น้ำหนักน้อย / ผอม"
        risk = "มากกว่าคนปกติ"
    } else if (bmi < 23) {
        result = "ปกติ (สุขภาพดี)"
        risk = "ปกติ"
    } else if (bmi < 25) {
        result = "ท้วม / โรคอ้วนระดับ 1"
        risk = "อันตรายระดับ 1"
    } else if (bmi <= 30) {
        result = "อ้วน / โรคอ้วนระดับ 2"
        risk = "อันตรายระดับ 2"
    } else {
        result = "อ้วนมาก / โรคอ้วนระดับ 3"
        risk = "อันตรายระดับ 3"
    }
    document.getElementById("bmi").innerText = bmi.toFixed(2);
    document.getElementById("result").innerText = result;
    document.getElementById("risk").innerText = risk;
}