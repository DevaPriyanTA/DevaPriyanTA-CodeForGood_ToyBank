import { Button, Nav, NavItem } from "reactstrap";
import { Link, useLocation } from "react-router-dom";

const navigation = [
  {
    title: "Dashboard",
    href: "/starter",
    icon: "bi bi-speedometer2",
  },
  {
    title: "Statistics",
    href: "/statistics",
    icon: "bi bi-bell",
  },
  {
    title: "Partners",
    href: "/partners",
    icon: "bi bi-patch-check",
  },
  {
    title: "Location",
    href: "/location",
    icon: "bi bi-hdd-stack",
  },
  {
    title: "Volunteers",
    href: "/Buttons",
    icon: "bi bi-card-text",
  },
  {
    title: "Extra",
    href: "/extra",
    icon: "bi bi-columns",
  },
  {
    title: "Extra",
    href: "/extra",
    icon: "bi bi-layout-split",
  },
  {
    title: "Extra",
    href: "/extra",
    icon: "bi bi-textarea-resize",
  },
  {
    title: "Extra",
    href: "/extra",
    icon: "bi bi-link",
  },
  {
    title: "People",
    href: "/people",
    icon: "bi bi-people",
  },
];

const Sidebar = () => {
  const showMobilemenu = () => {
    document.getElementById("sidebarArea").classList.toggle("showSidebar");
  };
  let location = useLocation();

  return (
    <div className="p-3">
      <div className="d-flex align-items-center">
        <a href="http://www.toybank.org/play">
        <img src = "./images/toybanklogo.png" width={"225px"} height={"120px"}></img>
        </a>
        <Button
          close
          size="sm"
          className="ms-auto d-lg-none"
          onClick={() => showMobilemenu()}
        ></Button>
      </div>
      <div className="pt-4 mt-2">
        <Nav vertical className="sidebarNav">
          {navigation.map((navi, index) => (
            <NavItem key={index} className="sidenav-bg">
              <Link
                to={navi.href}
                className={
                  location.pathname === navi.href
                    ? "text-primary nav-link py-3"
                    : "nav-link text-secondary py-3"
                }
              >
                <i className={navi.icon}></i>
                <span className="ms-3 d-inline-block">{navi.title}</span>
              </Link>
            </NavItem>
          ))}
          
        </Nav>
      </div>
    </div>
  );
};

export default Sidebar;
