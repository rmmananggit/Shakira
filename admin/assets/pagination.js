const itemsPerPage = 10; // Set items per page
let currentPage = 1; // Start on page 1

// Sample user data (replace with your actual data)
const users = [
    { id: '202412345', name: 'Jc Vanny Mill Saledaien', email: 'jcvanny@gmail.com', contact: '09123456789', role: 'Staff', status: 'Active' },
    { id: '202412346', name: 'Jay Noel Rojo', email: 'jaynoel@gmail.com', contact: '09123456789', role: 'HR', status: 'Active' },
    { id: '202412347', name: 'Petal May Dal', email: 'petalmay@gmail.com', contact: '09123456789', role: 'Faculty', status: 'Active' },
    { id: '202412348', name: 'Shakira Morales', email: 'shakira@gmail.com', contact: '09123456789', role: 'HR', status: 'Active' },
    // Add more user data as needed
];

// Function to render table rows based on current page
function renderTable() {
    const userTableBody = document.getElementById('userTableBody');
    userTableBody.innerHTML = ''; // Clear existing rows

    const start = (currentPage - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const paginatedItems = users.slice(start, end);

    paginatedItems.forEach(user => {
        const row = `<tr>
            <td>${user.id}</td>
            <td>${user.name}</td>
            <td>${user.email}</td>
            <td>${user.contact}</td>
            <td><span class="status ${user.role.toLowerCase()}">${user.role}</span></td>
            <td><span class="status ${user.status.toLowerCase()}">${user.status}</span></td>
            <td><a href="edit-act.html" class="action">Edit</a><a href="#1" class="action">Archive</a></td>
        </tr>`;
        userTableBody.innerHTML += row;
    });

    renderPagination();
}

// Function to render pagination buttons
function renderPagination() {
    const pagination = document.getElementById('pagination');
    pagination.innerHTML = ''; // Clear existing pagination

    const totalPages = Math.ceil(users.length / itemsPerPage);

    for (let i = 1; i <= totalPages; i++) {
        const button = document.createElement('button');
        button.textContent = i;
        button.className = (i === currentPage) ? 'active' : '';
        button.onclick = () => {
            currentPage = i;
            renderTable();
        };
        pagination.appendChild(button);
    }
}

// Initial call to render table and pagination
renderTable();
