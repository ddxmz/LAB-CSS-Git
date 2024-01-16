function navigate(target) {
    switch (target) {
        case "MEDIA":
            window.location.href = "index.php";
            break;
        case "WE ARE VALORANT":
            window.location.href = "about.php";
            break;
        case "AGENTS":
            window.location.href = "agent.php";
            break;
        case "MAPS":
            window.location.href = "maps.php";
            break;
        case "CHAMPIONS":
            window.location.href = "champions.php";
            break;
        default:
            break;
    }
}
