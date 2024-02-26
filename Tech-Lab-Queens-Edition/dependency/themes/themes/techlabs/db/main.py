import random
import csv

rows = []

#     0     1      2         3         4         5         6       7       8      9       10
"""Symbol,Name,Last Sale,Net Change,% Change,Market Cap,Country,IPO Year,Volume,Sector,Industry"""

with open("data.csv", 'r') as csv_file:
    csv_reader = csv.reader(csv_file, delimiter=',')
    line_count = 0
    for row in csv_file:
        rows.append(row.strip().split(','))

random_rows = random.sample(rows[1:], 50)

with open("randomized_data.csv", 'w') as random_csv_file:
    csv_writer = csv.writer(random_csv_file, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
    csv_writer.writerow([rows[0][0], rows[0][1], rows[0][2], rows[0][3], rows[0][4], rows[0][5], rows[0][6], rows[0][7], rows[0][8], rows[0][9]])
    for idx in range(len(random_rows)):
        row = random_rows[idx]

        random_last_sale = f"${round(random.uniform(0.00, 1000.00), 2)}"

        random_net_change = f"{round(random.uniform(-5.000, 5.000), 3)}"

        random_percent_change = f"{round(random.uniform(-10.000, 10.000), 3)}%"

        random_market_cap = f"{round(random.uniform(1_000_000.00, 1_000_000_000.00), 2)}"

        random_ipo_year = f"{random.randint(1800, 2024)}"

        volume = f"{random.randint(10_000, 50_000_000)}"

        new_row = [
            row[0], row[1],
            random_last_sale, random_net_change, random_percent_change,
            random_market_cap,
            row[6],
            random_ipo_year, volume,
            row[9]
        ]

        csv_writer.writerow(new_row)
