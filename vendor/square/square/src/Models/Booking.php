<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Represents a booking as a time-bound service contract for a seller's staff member to provide a
 * specified service
 * at a given location to a requesting customer in one or more appointment segments.
 */
class Booking implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $version;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $updatedAt;

    /**
     * @var string|null
     */
    private $startAt;

    /**
     * @var string|null
     */
    private $locationId;

    /**
     * @var string|null
     */
    private $customerId;

    /**
     * @var string|null
     */
    private $customerNote;

    /**
     * @var string|null
     */
    private $sellerNote;

    /**
     * @var AppointmentSegment[]|null
     */
    private $appointmentSegments;

    /**
     * @var int|null
     */
    private $transitionTimeMinutes;

    /**
     * @var bool|null
     */
    private $allDay;

    /**
     * @var string|null
     */
    private $locationType;

    /**
     * @var BookingCreatorDetails|null
     */
    private $creatorDetails;

    /**
     * @var string|null
     */
    private $source;

    /**
     * Returns Id.
     *
     * A unique ID of this object representing a booking.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * A unique ID of this object representing a booking.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Version.
     *
     * The revision number for the booking used for optimistic concurrency.
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }

    /**
     * Sets Version.
     *
     * The revision number for the booking used for optimistic concurrency.
     *
     * @maps version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * Returns Status.
     *
     * Supported booking statuses.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * Supported booking statuses.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Created At.
     *
     * The RFC 3339 timestamp specifying the creation time of this booking.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * The RFC 3339 timestamp specifying the creation time of this booking.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     *
     * The RFC 3339 timestamp specifying the most recent update time of this booking.
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * The RFC 3339 timestamp specifying the most recent update time of this booking.
     *
     * @maps updated_at
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Start At.
     *
     * The RFC 3339 timestamp specifying the starting time of this booking.
     */
    public function getStartAt(): ?string
    {
        return $this->startAt;
    }

    /**
     * Sets Start At.
     *
     * The RFC 3339 timestamp specifying the starting time of this booking.
     *
     * @maps start_at
     */
    public function setStartAt(?string $startAt): void
    {
        $this->startAt = $startAt;
    }

    /**
     * Returns Location Id.
     *
     * The ID of the [Location]($m/Location) object representing the location where the booked service is
     * provided. Once set when the booking is created, its value cannot be changed.
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     *
     * The ID of the [Location]($m/Location) object representing the location where the booked service is
     * provided. Once set when the booking is created, its value cannot be changed.
     *
     * @maps location_id
     */
    public function setLocationId(?string $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns Customer Id.
     *
     * The ID of the [Customer]($m/Customer) object representing the customer receiving the booked service.
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     *
     * The ID of the [Customer]($m/Customer) object representing the customer receiving the booked service.
     *
     * @maps customer_id
     */
    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Customer Note.
     *
     * The free-text field for the customer to supply notes about the booking. For example, the note can be
     * preferences that cannot be expressed by supported attributes of a relevant
     * [CatalogObject]($m/CatalogObject) instance.
     */
    public function getCustomerNote(): ?string
    {
        return $this->customerNote;
    }

    /**
     * Sets Customer Note.
     *
     * The free-text field for the customer to supply notes about the booking. For example, the note can be
     * preferences that cannot be expressed by supported attributes of a relevant
     * [CatalogObject]($m/CatalogObject) instance.
     *
     * @maps customer_note
     */
    public function setCustomerNote(?string $customerNote): void
    {
        $this->customerNote = $customerNote;
    }

    /**
     * Returns Seller Note.
     *
     * The free-text field for the seller to supply notes about the booking. For example, the note can be
     * preferences that cannot be expressed by supported attributes of a specific
     * [CatalogObject]($m/CatalogObject) instance.
     * This field should not be visible to customers.
     */
    public function getSellerNote(): ?string
    {
        return $this->sellerNote;
    }

    /**
     * Sets Seller Note.
     *
     * The free-text field for the seller to supply notes about the booking. For example, the note can be
     * preferences that cannot be expressed by supported attributes of a specific
     * [CatalogObject]($m/CatalogObject) instance.
     * This field should not be visible to customers.
     *
     * @maps seller_note
     */
    public function setSellerNote(?string $sellerNote): void
    {
        $this->sellerNote = $sellerNote;
    }

    /**
     * Returns Appointment Segments.
     *
     * A list of appointment segments for this booking.
     *
     * @return AppointmentSegment[]|null
     */
    public function getAppointmentSegments(): ?array
    {
        return $this->appointmentSegments;
    }

    /**
     * Sets Appointment Segments.
     *
     * A list of appointment segments for this booking.
     *
     * @maps appointment_segments
     *
     * @param AppointmentSegment[]|null $appointmentSegments
     */
    public function setAppointmentSegments(?array $appointmentSegments): void
    {
        $this->appointmentSegments = $appointmentSegments;
    }

    /**
     * Returns Transition Time Minutes.
     *
     * Additional time at the end of a booking.
     * Applications should not make this field visible to customers of a seller.
     */
    public function getTransitionTimeMinutes(): ?int
    {
        return $this->transitionTimeMinutes;
    }

    /**
     * Sets Transition Time Minutes.
     *
     * Additional time at the end of a booking.
     * Applications should not make this field visible to customers of a seller.
     *
     * @maps transition_time_minutes
     */
    public function setTransitionTimeMinutes(?int $transitionTimeMinutes): void
    {
        $this->transitionTimeMinutes = $transitionTimeMinutes;
    }

    /**
     * Returns All Day.
     *
     * Whether the booking is of a full business day.
     */
    public function getAllDay(): ?bool
    {
        return $this->allDay;
    }

    /**
     * Sets All Day.
     *
     * Whether the booking is of a full business day.
     *
     * @maps all_day
     */
    public function setAllDay(?bool $allDay): void
    {
        $this->allDay = $allDay;
    }

    /**
     * Returns Location Type.
     *
     * Supported types of location where service is provided.
     */
    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    /**
     * Sets Location Type.
     *
     * Supported types of location where service is provided.
     *
     * @maps location_type
     */
    public function setLocationType(?string $locationType): void
    {
        $this->locationType = $locationType;
    }

    /**
     * Returns Creator Details.
     *
     * Information about a booking creator.
     */
    public function getCreatorDetails(): ?BookingCreatorDetails
    {
        return $this->creatorDetails;
    }

    /**
     * Sets Creator Details.
     *
     * Information about a booking creator.
     *
     * @maps creator_details
     */
    public function setCreatorDetails(?BookingCreatorDetails $creatorDetails): void
    {
        $this->creatorDetails = $creatorDetails;
    }

    /**
     * Returns Source.
     *
     * Supported sources a booking was created from.
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * Sets Source.
     *
     * Supported sources a booking was created from.
     *
     * @maps source
     */
    public function setSource(?string $source): void
    {
        $this->source = $source;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->id)) {
            $json['id']                      = $this->id;
        }
        if (isset($this->version)) {
            $json['version']                 = $this->version;
        }
        if (isset($this->status)) {
            $json['status']                  = $this->status;
        }
        if (isset($this->createdAt)) {
            $json['created_at']              = $this->createdAt;
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']              = $this->updatedAt;
        }
        if (isset($this->startAt)) {
            $json['start_at']                = $this->startAt;
        }
        if (isset($this->locationId)) {
            $json['location_id']             = $this->locationId;
        }
        if (isset($this->customerId)) {
            $json['customer_id']             = $this->customerId;
        }
        if (isset($this->customerNote)) {
            $json['customer_note']           = $this->customerNote;
        }
        if (isset($this->sellerNote)) {
            $json['seller_note']             = $this->sellerNote;
        }
        if (isset($this->appointmentSegments)) {
            $json['appointment_segments']    = $this->appointmentSegments;
        }
        if (isset($this->transitionTimeMinutes)) {
            $json['transition_time_minutes'] = $this->transitionTimeMinutes;
        }
        if (isset($this->allDay)) {
            $json['all_day']                 = $this->allDay;
        }
        if (isset($this->locationType)) {
            $json['location_type']           = $this->locationType;
        }
        if (isset($this->creatorDetails)) {
            $json['creator_details']         = $this->creatorDetails;
        }
        if (isset($this->source)) {
            $json['source']                  = $this->source;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
