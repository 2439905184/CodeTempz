def is_leap_year(year):
    """判断平闰年"""
    return (year % 4 == 0 and year % 100 != 0) or (year % 400 == 0)

def days_in_month(year, month):
    """获取某年某月的天数"""
    # 定义每个月的天数，下标0占位，下标1代表1月
    month_days = [0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]
    if month == 2 and is_leap_year(year):
        return 29
    return month_days[month]

def total_days_from_year_1(year, month, day):
    """计算从公元1年1月1日到该日期的总天数（绝对天数）"""
    total = 0
    # 1. 累加之前完整年份的天数
    for y in range(1, year):
        total += 366 if is_leap_year(y) else 365
    
    # 2. 累加当前年份之前完整月份的天数
    for m in range(1, month):
        total += days_in_month(year, m)
        
    # 3. 加上当前月的天数
    total += day
    return total

def manual_days_between(y1, m1, d1, y2, m2, d2):
    """手动计算两日期相差天数"""
    days1 = total_days_from_year_1(y1, m1, d1)
    days2 = total_days_from_year_1(y2, m2, d2)
    return abs(days2 - days1)

# ================= 测试 =================
print(manual_days_between(2026, 7, 1, 2026, 8, 7))     # 输出 37
print(manual_days_between(2024, 2, 28, 2024, 3, 1))    # 输出 2 (因为2024闰年)
print(manual_days_between(2023, 2, 28, 2023, 3, 1))    # 输出 1 (因为2023平年)