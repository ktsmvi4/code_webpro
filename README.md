# 🧪 Manual Software Testing: Registration Form

โปรเจกต์ทดสอบระบบฟอร์มลงทะเบียน (Registration Form) แบบ Manual Testing โดยเน้นการวิเคราะห์ Test Scenarios, การออกแบบ Test Cases ด้วยเทคนิค Boundary Value Analysis (BVA) & Equivalence Partitioning (EP) และการเขียน Bug Report 

---

## 📊 1. Executive Test Summary

- **Target System:** Registration Form (`/register`)
- **Testing Type:** Black-box Testing (Functional, Validation & Business Logic)
- **Environment:** Chrome Browser / Windows 11
- **Total Test Cases:** 8 Cases
- **Passed:** 7 Cases (87.5%)
- **Failed:** 1 Case (12.5%)

---

## 📋 2. Test Cases Overview

| Test Case ID | Test Scenario | Test Technique | Expected Result | Status |
| :--- | :--- | :--- | :--- | :---: |
| **TC-REG-001** | กรอกข้อมูลถูกต้องครบถ้วน | Happy Path | สมัครสมาชิกสำเร็จ นำทางไปหน้า Welcome | 🟢 **PASS** |
| **TC-REG-002** | ตรวจสอบ Boundary ความยาว Username (3, 4, 12, 13 ตัว) | BVA | 4 และ 12 ตัวผ่าน / 3 และ 13 ตัวขึ้น Error แจ้งเตือน | 🟢 **PASS** |
| **TC-REG-003** | กรอกตัวอักษรพิเศษในช่อง Username | Invalid Input | แสดง Error ไม่ยินยอมให้ใช้อักขระพิเศษ | 🟢 **PASS** |
| **TC-REG-004** | ตรวจสอบเงื่อนไข Password (ไม่มีตัวเลข / ไม่มีตัวอักษร) | Format Validation | แสดง Error แจ้งเงื่อนไข Password ไม่ครบถ้วน | 🟢 **PASS** |
| **TC-REG-005** | ตรวจสอบรูปแบบ Email กรณีมีช่องว่าง (Spacebar) | Format Validation | ระบบไม่ควรค้าง และแจ้งเตือนรูปแบบไม่ถูกต้อง | 🔴 **FAIL** |
| **TC-REG-006** | กด Submit โดยไม่กรอกข้อมูลเลยสักช่อง | System Flow | ไม่ไปหน้าถัดไป แสดง Warning และมีลิงก์ไปหน้า Login | 🟢 **PASS** |
| **TC-REG-007** | สมัครด้วย Username ที่มีอยู่แล้วในระบบ | Business Logic | แสดง Error *"ชื่อผู้ใช้นี้ถูกใช้งานแล้ว"* | 🟢 **PASS** |
| **TC-REG-008** | Paste ข้อความยาว 1,000 ตัวอักษรลงช่อง Username | Edge Case / Stress | ตัดเหลือ 12 ตัวอักษร หรือแจ้งเตือนความยาวเกิน | 🟢 **PASS** |

---

## 🐛 3. Bug Report Highlight

### [BUG-REG-001] ระบบค้างหน้าจอขาวเมื่อกรอก Email ที่มีช่องว่าง (Spacebar)
- **Severity:** High | **Priority:** High
- **Actual Result:** เมื่อกรอก Email เช่น `user @gmail.com` ระบบหมุนค้างและเกิด Blank Screen (Console Log: `Uncaught TypeError`)
- **Suggested Fix:** 
  1. ระบบควร Auto-trim ช่องว่างออกให้อัตโนมัติ หรือ
  2. แสดง Validation Error สีแดงแจ้งเตือนผู้ใช้ *"รูปแบบอีเมลไม่ถูกต้อง"*
