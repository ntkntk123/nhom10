import os
import sys
import time
from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.options import Options
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

# Nhập tham số từ bàn phím
cookie_input = input("Nhập cookie: ")
group_id = input("Nhập group_id: ")
delay = float(input("Nhập thời gian delay giữa các tin nhắn (giây): "))
messages_file_path = input("Nhập đường dẫn đến file chứa tin nhắn: ")
window_name = input("Nhập tên cửa sổ trình duyệt: ")

# Đọc các tin nhắn từ file
with open(messages_file_path, 'r', encoding='utf-8') as file:
    messages = file.readlines()

# Tạo dictionary từ cookie nhập vào
cookie_dict = {}
cookies = cookie_input.split(";")
for cookie in cookies:
    cookie = cookie.strip()
    if "=" in cookie:
        name, value = cookie.split("=", 1)
        cookie_dict[name] = value

# Cấu hình Selenium WebDriver với window name
options = Options()
options.add_argument("--disable-extensions")
options.add_argument("--disable-gpu")
options.add_argument(f"--window-name={window_name}")
driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()), options=options)

# Truy cập vào Facebook và đăng nhập
fb_url = "https://www.facebook.com"
driver.get(fb_url)
time.sleep(3)

# Thêm cookie vào trình duyệt
for cookie_name, cookie_value in cookie_dict.items():
    cookie = {
        'name': cookie_name,
        'value': cookie_value,
        'domain': '.facebook.com',
        'path': '/',
    }
    driver.add_cookie(cookie)

# Tải lại trang để áp dụng cookie
driver.refresh()
time.sleep(5)

# Kiểm tra nếu đăng nhập thành công
if "facebook.com" not in driver.current_url:
    print("Đăng nhập thất bại! Kiểm tra lại cookie.")
    driver.quit()
    sys.exit(1)

print("Logged in, current URL:", driver.current_url)

# Truy cập vào trang nhóm
group_url = f"https://www.facebook.com/messages/t/{group_id}"
driver.get(group_url)
time.sleep(5)

# Cập nhật XPath để tìm phần tử nhập tin nhắn bằng class 'xat24cr' và 'xdj266r'
# Dùng CSS selector 'p.xat24cr.xdj266r' để tìm input
message_input_selector = "p.xat24cr.xdj266r"

# Hàm tìm và trả về phần tử nhập tin nhắn
def get_message_input():
    try:
        # Cập nhật lại phần tử nhập tin nhắn trước khi gửi mỗi tin
        message_input = WebDriverWait(driver, 20).until(EC.element_to_be_clickable((By.CSS_SELECTOR, message_input_selector)))
        return message_input
    except Exception as e:
        print(f"Error occurred while finding message input: {str(e)}")
        return None

# Gửi tin nhắn liên tục
for message in messages:
    try:
        message_content = message.strip()

        # Tìm phần tử nhập tin nhắn mỗi lần gửi tin nhắn
        message_input = get_message_input()
        if message_input is not None:
            message_input.send_keys(message_content)
            message_input.send_keys(Keys.RETURN)  # Gửi tin nhắn
            print(f"Message sent: {message_content}")

        else:
            print("Failed to find message input, skipping this message.")
        
    except Exception as e:
        print(f"Error occurred while sending message: {str(e)}")
    
    time.sleep(delay)

# Để giữ trình duyệt mở
input("Press Enter to close the browser manually...")
driver.quit()  # Đóng trình duyệt khi hoàn thành
