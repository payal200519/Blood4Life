<!DOCTYPE html>
<html>
<head>
    <title>Blood Donation Admin Report</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 85%;
            margin: 40px auto;
            padding: 25px;
            background-color: #fff;
            box-shadow: 0 12px 24px rgba(0,0,0,0.15);
            border-radius: 16px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 16px;
            border-bottom: 2px solid #dee2e6;
            text-align: center;
        }
        th {
            background: #007bff;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            cursor: pointer;
            position: sticky;
            top: 0;
        }
        tr:nth-child(even) {
            background-color: #f1f3f5;
        }
        tr:hover {
            background-color: #e2e6ea;
            transition: 0.3s;
        }
        h2 {
            text-align: center;
            color: #343a40;
            margin-bottom: 20px;
        }
        .search-box, .bulk-actions, .export-btn {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .search-box input, .bulk-actions input {
            padding: 12px;
            width: 280px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            outline: none;
            transition: border-color 0.3s ease;
        }
        .search-box input:focus, .bulk-actions input:focus {
            border-color: #007bff;
        }
        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn:hover {
            transform: translateY(-2px);
        }
        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }
        .btn-primary:hover {
            background-color: #0069d9;
        }
        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .btn-info {
            background-color: #17a2b8;
            color: #fff;
        }
        .btn-info:hover {
            background-color: #138496;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Blood Donation Admin Report</h2>

        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Search by ID, Name, Blood Group..">
            <button class="btn btn-primary" onclick="searchTable()">Search</button>
            <button class="btn btn-primary" onclick="refreshTable()">Refresh Table</button>
        </div>

        <div class="bulk-actions">
            <button class="btn btn-danger" onclick="bulkDelete()">Bulk Delete</button>
        </div>

        <div id="reportContent">
            <table id="donorTable">
                <tr>
                    <th><input type="checkbox" id="selectAll" onclick="toggleSelectAll(this)"></th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Blood Type</th>
                    <th>Donation Date</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td><input type="checkbox" class="row-select"></td>
                    <td contenteditable="true">1</td>
                    <td contenteditable="true">John Doe</td>
                    <td contenteditable="true">johndoe@example.com</td>
                    <td contenteditable="true">A+</td>
                    <td contenteditable="true">2025-03-01</td>
                    <td>
                        <button class="btn btn-primary" onclick="editRow(this)">Save</button>
                        <button class="btn btn-danger" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="row-select"></td>
                    <td contenteditable="true">2</td>
                    <td contenteditable="true">Doe</td>
                    <td contenteditable="true">johndoe@example.com</td>
                    <td contenteditable="true">B+</td>
                    <td contenteditable="true">2025-03-01</td>
                    <td>
                        <button class="btn btn-primary" onclick="editRow(this)">Save</button>
                        <button class="btn btn-danger" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
            </table>
        </div>

        <div class="export-btn">
            <button class="btn btn-info" onclick="exportToPDF()">Export to PDF</button>
        </div>
    </div>

    <script>
        function exportToPDF() {
            const reportContent = document.getElementById('reportContent');
            html2canvas(reportContent).then(canvas => {
                const imgData = canvas.toDataURL('image/png');
                const pdf = new jspdf.jsPDF();
                pdf.addImage(imgData, 'PNG', 10, 10);
                pdf.save('donor_report.pdf');
            });
        }

        function toggleSelectAll(source) {
            const checkboxes = document.querySelectorAll('.row-select');
            checkboxes.forEach(checkbox => checkbox.checked = source.checked);
        }

        function bulkDelete() {
            const selectedRows = document.querySelectorAll('.row-select:checked');
            selectedRows.forEach(row => row.closest('tr').remove());
        }

        function deleteRow(button) {
            const row = button.closest("tr");
            row.remove();
        }

        function editRow(button) {
            alert('Changes saved!');
        }

        function searchTable() {
            const input = document.getElementById('searchInput').value.trim().toLowerCase();
            const rows = document.querySelectorAll('#donorTable tr');
            rows.forEach((row, index) => {
                if (index === 0) return;
                const cells = row.querySelectorAll('td');
                const isMatch = cells[1].textContent.toLowerCase() === input ||
                                cells[2].textContent.toLowerCase() === input ||
                                cells[4].textContent.toLowerCase() === input;
                row.style.display = isMatch || input === '' ? '' : 'none';
            });
        }

        function refreshTable() {
            const rows = document.querySelectorAll('#donorTable tr');
            rows.forEach((row, index) => {
                if (index !== 0) {
                    row.style.display = '';
                }
            });
        }
    </script>
</body>
</html>
