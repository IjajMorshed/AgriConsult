const buttons=document.querySelectorAll(".plantsbtn");
const output=document.getElementById("output");

buttons.forEach(button => {
    button.addEventListener("click",() => {
        const userkey=button.getAttribute("data-user");
        window.scrollTo({ top: 100, behavior: 'smooth' });

        fetch("PlantsData.json")
        .then(res =>res.json())
        .then(data => {
            const user=data[userkey];

            output.innerHTML =`
            <p><strong>Name:</strong>${user.name}</p>
            <p><strong>Description:</strong>${user.description}</p>
            <p><strong>Benefits:</strong>${user.benefits}</p>
            `;
        })
        .catch(err => {
        console.error("Error fetching data:", err);
      });
    })
})