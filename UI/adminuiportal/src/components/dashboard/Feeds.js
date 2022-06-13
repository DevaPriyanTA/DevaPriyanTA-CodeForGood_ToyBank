import React from "react";
import {
  Card,
  CardBody,
  CardTitle,
  ListGroup,
  CardSubtitle,
  ListGroupItem,
  Button,
} from "reactstrap";

const FeedData = [
  {
    title: "Growth Report",
    icon: "bi bi-bell",
    color: "primary",
    date: "1 minute ago",
  },
  {
    title: "New Volunteer Registered",
    icon: "bi bi-person",
    color: "info",
    date: "6 minute ago",
  },
  {
    title: "Growth Decrease",
    icon: "bi bi-hdd",
    color: "danger",
    date: "15 minute ago",
  },
  {
    title: "New Project Received",
    icon: "bi bi-bag-check",
    color: "success",
    date: "17 minute ago",
  },
  {
    title: "Donation Received",
    icon: "bi bi-bell",
    color: "dark",
    date: "20 minute ago",
  },
  {
    title: "Montly Report",
    icon: "bi bi-hdd",
    color: "warning",
    date: "26 minute ago",
  },
];

const Feeds = () => {
  return (
    <Card>
      <CardBody>
        <CardTitle tag="h5">Today's Feeds</CardTitle>
        <CardSubtitle className="mb-2 text-muted" tag="h6">
          Unseen
        </CardSubtitle>
        <ListGroup flush className="mt-4">
          {FeedData.map((feed, index) => (
            <ListGroupItem
              key={index}
              action
              href="/"
              tag="a"
              className="d-flex align-items-center p-3 border-0"
            >
              <Button
                className="rounded-circle me-3"
                size="sm"
                color={feed.color}
              >
                <i className={feed.icon}></i>
              </Button>
              {feed.title}
              <small className="ms-auto text-muted text-small">
                {feed.date}
              </small>
            </ListGroupItem>
          ))}
        </ListGroup>
      </CardBody>
    </Card>
  );
};

export default Feeds;
